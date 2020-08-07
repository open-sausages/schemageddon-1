<?php

namespace MyProject;

use SilverStripe\GraphQL\Scaffolding\Interfaces\ScaffoldingProvider;
use SilverStripe\GraphQL\Scaffolding\Scaffolders\SchemaScaffolder;

class KitchenSink implements ScaffoldingProvider
{
    /**
     * @param SchemaScaffolder $scaffolder
     */
    public function provideGraphQLScaffolding(SchemaScaffolder $scaffolder)
    {
        // Hack allows controlling schema size from the request
        $count = 100;
        $i = 0;
        $files = glob(BASE_PATH . '/app/src/Fake/*.php');
        $files[] = 'Page.php';
        foreach($files as $file) {
            $className = basename($file, '.php');
            $scaffolder->type($className)
                ->addAllFields()
                ->addAllOperations();

            $i++;
            if ($i  == $count) break;
        }
    }
}
