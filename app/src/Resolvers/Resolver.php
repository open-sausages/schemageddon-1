<?php

namespace MyProject\Resolvers;

use Faker\Factory;
use SilverStripe\Core\Injector\Injector;
use SilverStripe\GraphQL\Schema\Plugin\PaginationPlugin;
use SilverStripe\GraphQL\Schema\Resolver\DefaultResolverProvider;
use SilverStripe\i18n\Data\Locales;
use Closure;

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

    public static function resolveReadCountries($obj, array $args = [])
    {
        $results = [];
        $countries = Injector::inst()->get(Locales::class)->getCountries();
        foreach ($countries as $code => $name) {
            $results[] = [
                'code' => $code,
                'name' => $name
            ];
        }

        return $results;
    }

    public static function paginateCountries(array $context): Closure
    {
        $maxLimit = $context['maxLimit'];
        return function (array $countries, array $args) use ($maxLimit) {
            $offset = $args['offset'];
            $limit = $args['limit'];
            $total = count($countries);
            if ($limit > $maxLimit) {
                $limit = $maxLimit;
            }

            $limitedList = array_slice($countries, $offset, $limit);

            return PaginationPlugin::createPaginationResult($total, $limitedList, $limit, $offset);
        };
    }

}
