<?php

namespace MyProject;

use SilverStripe\CMS\Model\SiteTree;
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
        $siteTree = ModelType::create(SiteTree::class)
            ->addAllFields()
            ->addAllOperations();
        $schema->addModel($siteTree);

        for ($i = 1; $i < 50; $i++) {
            $cls = 'MyProject\\Fake\\DataObject' . $i;
            $model = ModelType::create($cls)
                ->addAllFields()
                ->addAllOperations();
            $schema->addModel($model);
        }
    }
}
