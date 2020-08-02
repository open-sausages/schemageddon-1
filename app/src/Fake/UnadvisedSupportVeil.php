<?php





class UnadvisedSupportVeil extends \Page
{

    private static $db = [
        'Test' => 'Int',
        'Theory' => 'Varchar',
        
    ];


    private static $has_one = [
        'Popcorn' => Popcorn::class,
        'SpicyCoast' => SpicyCoast::class,
        
    ];


    private static $has_many = [
        'JoblessRoads' => JoblessRoad::class,
        
    ];


    private static $many_many = [
        'FierceWools' => FierceWool::class,
        
    ];


    private static $belongs_many_many = [
        'UppityVest' => UppityVest::class,
        
    ];


    private static $table_name = 'UnadvisedSupportVeil';

}