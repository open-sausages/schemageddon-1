<?php

namespace MyProject\Resolvers;

use GraphQL\Type\Definition\ResolveInfo;
use SilverStripe\Core\Injector\Injector;
use SilverStripe\GraphQL\Schema\Resolver\DefaultResolverProvider;

class Resolver extends DefaultResolverProvider
{
//    public static function resolveQuery($obj, $args = [], $context = [], ResolveInfo $info)
//    {
//        $queryName = $info->fieldName;
//        preg_match('/^read(One)?([A-Za-z0-9_]+)/', $queryName, $matches);
//        if (!$matches) {
//            return null;
//        }
//        $isOne = $matches[1] ?? false;
//        $class = $isOne ? $matches[2] : substr($matches[2], 0, -1);
//        if (!class_exists($class)) {
//            return null;
//        }
//        $sng = Injector::inst()->get($class);
//        $db = $sng->config()->get('db');
//        $response = [];
//        foreach ($db as $fieldName => $type) {
//            $response[$fieldName] = 'This is field ' . $fieldName;
//        }
//
//        return $isOne ? $response : [$response];
//    }

    public static function resolveMyFirstQuery($obj, $args = [])
    {
        return [
            'Name' => 'it works ' . $args['Arg1'],
            'Featured' => false,
            'Images' => [
                'URL' => 'http://' . $args['Arg1'],
                'Rendered' => 'You asked for size ',
            ]
        ];
    }

    public static function resolveProductName(): string
    {
        return 'i am product';
    }
}
