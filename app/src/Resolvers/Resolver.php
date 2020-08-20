<?php

namespace MyProject\Resolvers;

use Faker\Factory;
use SilverStripe\GraphQL\Schema\Resolver\DefaultResolverProvider;

if (!class_exists(DefaultResolverProvider::class)) {
    return;
}

class Resolver extends DefaultResolverProvider
{
    public static function resolveCompanies($obj, array $args)
    {
        $faker = Factory::create();
        $count = $args['count'] ?? 10;
        $arr = range(1, $count);

        return array_map(function () use ($faker) {
            return [
                'Name' => $faker->name,
                'Tagline' => $faker->catchPhrase,
                'NumEmployees' => $faker->randomDigit,
            ];
        }, $arr);
    }

    public static function resolveCompanyAddress($obj, array $args)
    {
        $faker = Factory::create();
        $format = $args['format'] ?? null;
        if ($format && $format === 'CITY_ONLY') {
            return $faker->city;
        }

        return $faker->address;
    }
}
