<?php




use SilverStripe\Versioned\Versioned;


class Spot extends \Page
{

    private static $db = [
        'Profit' => 'Text',
        
    ];


    private static $has_one = [
        'JitteryUmbrella' => JitteryUmbrella::class,
        
    ];


    private static $has_many = [
        'Agreements' => Agreement::class,
        'Washs' => Wash::class,
        'Supports' => Support::class,
        
    ];


    private static $many_many = [
        'RightSigns' => RightSign::class,
        
    ];



    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Spot';

}