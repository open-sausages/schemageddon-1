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
            if ($i === 5) continue;
            $cls = 'MyProject\\Fake\\DataObject' . $i;
            $model = ModelType::create($cls)
                ->addField('created', true)
                ->addAllOperations();
            $schema->addModel($model);
        }
    }
}
