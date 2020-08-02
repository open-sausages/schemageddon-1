<?php





class PanickyChickens extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Pleasure' => 'Int',
        'Bike' => 'Int',
        'Train' => 'Int',
        'Pigs' => 'Boolean',
        
    ];


    private static $has_one = [
        'TightfistedChannelDivision' => TightfistedChannelDivision::class,
        
    ];



    private static $many_many = [
        'DisturbedShows' => DisturbedShow::class,
        
    ];



    private static $table_name = 'PanickyChickens';

}