<?php




use SilverStripe\Versioned\Versioned;


class Ducks extends \Page
{

    private static $db = [
        'Tub' => 'Varchar',
        'Pull' => 'Varchar',
        
    ];


    private static $has_one = [
        'ReconditeYard' => ReconditeYard::class,
        
    ];


    private static $has_many = [
        'Kittenss' => Kittens::class,
        
    ];


    private static $many_many = [
        'JoblessRoads' => JoblessRoad::class,
        
    ];



    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Ducks';

}