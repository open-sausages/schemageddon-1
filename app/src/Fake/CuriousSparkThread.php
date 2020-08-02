<?php





class CuriousSparkThread extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Regret' => 'Varchar',
        'Station' => 'Int',
        'Chickens' => 'Int',
        'Pigs' => 'Boolean',
        
    ];



    private static $has_many = [
        'ActuallyMittenActivities' => ActuallyMittenActivity::class,
        
    ];


    private static $many_many = [
        'Popcorns' => Popcorn::class,
        
    ];



    private static $table_name = 'CuriousSparkThread';

}