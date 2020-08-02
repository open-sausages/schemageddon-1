<?php





class Umbrella extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Temper' => 'Varchar',
        'Bridge' => 'Text',
        
    ];


    private static $has_one = [
        'Feeling' => Feeling::class,
        'Show' => Show::class,
        'WoodenBulb' => WoodenBulb::class,
        
    ];



    private static $many_many = [
        'MaterialisticStomachCaves' => MaterialisticStomachCave::class,
        
    ];



    private static $table_name = 'Umbrella';

}