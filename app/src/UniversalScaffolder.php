<?php

namespace MyProject;

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\CMS\Model\VirtualPage;
use SilverStripe\Core\ClassInfo;
use SilverStripe\GraphQL\Scaffolding\Interfaces\ScaffoldingProvider;
use SilverStripe\GraphQL\Scaffolding\Scaffolders\OperationScaffolder;
use SilverStripe\GraphQL\Scaffolding\Scaffolders\SchemaScaffolder;
use SilverStripe\ORM\DataObject;

class UniversalScaffolder implements ScaffoldingProvider
{
    public function provideGraphQLScaffolding(SchemaScaffolder $scaffolder)
    {
        $scaffolder->type('AlikeSheep');
        $scaffolder->type('AlikeSwing');
        $scaffolder->type('AmbiguousDuck');
        $scaffolder->type('AttractiveQuietHospital');
        $scaffolder->type('Soap');
        $scaffolder->type('Popcorn');
        $scaffolder->type('Doctor');
        $scaffolder->type('HappyMoveReason');
        $scaffolder->type('Cakes');
        $i = 0;
        $files = glob(BASE_PATH . '/app/src/Fake/*.php');
        $files[] = 'Page.php';
        foreach($files as $file) {
            $className = basename($file, '.php');
            $type = $scaffolder->type($className)
                ->addAllFields(false);
            $type->operation(SchemaScaffolder::READ);
            $type->operation(SchemaScaffolder::READ_ONE);
//            $type->operation(SchemaScaffolder::UPDATE);
//            $type->operation(SchemaScaffolder::CREATE);
//            $type->operation(SchemaScaffolder::DELETE);
//            foreach (OperationScaffolder::getOperations() as $id => $operation) {
//                $type->operation($id);
//            }
            $i++;
            if (is_subclass_of($className, SiteTree::class)) continue;
            $hasMany = $className::config()->get('has_many');
            $manyMany = $className::config()->get('many_many');

            foreach (array_merge($hasMany, $manyMany) as $name => $class) {
                if ($name === 'LinkTracking') continue;
                if ($name === 'BackLinks') continue;
                if ($name === 'FileTracking') continue;
                if ($name === 'VirtualPages') continue;
                $type->nestedQuery($name);
            }

        }
    }
}
