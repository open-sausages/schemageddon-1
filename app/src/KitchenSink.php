<?php

namespace MyProject;

use SilverStripe\GraphQL\Schema\Exception\SchemaBuilderException;
use SilverStripe\GraphQL\Schema\Interfaces\SchemaUpdater;
use SilverStripe\GraphQL\Schema\Schema;
use SilverStripe\GraphQL\Schema\Type\ModelType;

class KitchenSink implements SchemaUpdater
{
    /**
     * @param Schema $schema
     * @throws SchemaBuilderException
     */
    public static function updateSchema(Schema $schema): void
    {
        // Hack allows controlling schema size from the request
        $count = $_REQUEST['types'] ?? 300;
        $i = 0;
        $files = glob(BASE_PATH . '/app/src/Fake/*.php');
        $files[] = 'Page.php';
        foreach($files as $file) {
            $className = basename($file, '.php');
            $model = ModelType::create($className)
                ->addAllFields()
                ->addAllOperations();
            $schema->addModel($model);
            $i++;
            if ($i  == $count) break;
        }
    }
}
