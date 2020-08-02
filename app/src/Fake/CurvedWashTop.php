<?php




use SilverStripe\Versioned\Versioned;


class CurvedWashTop extends \Page
{

    private static $db = [
        'Straw' => 'Boolean',
        'Key' => 'Varchar',
        'Ice' => 'Varchar',
        
    ];


    private static $has_one = [
        'Baby' => Baby::class,
        
    ];


    private static $has_many = [
        'Shades' => Shade::class,
        
    ];



    private static $belongs_many_many = [
        'JoblessRoad' => JoblessRoad::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'CurvedWashTop';

}