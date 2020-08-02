<?php




use SilverStripe\Versioned\Versioned;


class Soap extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Holiday' => 'Varchar',
        'Giraffe' => 'Varchar',
        'Suit' => 'Boolean',
        'Control' => 'Boolean',
        'Road' => 'Boolean',
        
    ];


    private static $has_one = [
        'DispensableAftermath' => DispensableAftermath::class,
        'SqueamishPopcornPlayground' => SqueamishPopcornPlayground::class,
        'AheadFairiesBridge' => AheadFairiesBridge::class,
        'AbundantTiger' => AbundantTiger::class,
        
    ];


    private static $has_many = [
        'Hobbiess' => Hobbies::class,
        'LivelyDucksTrains' => LivelyDucksTrain::class,
        
    ];




    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Soap';

}