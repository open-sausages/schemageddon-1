<?php




use SilverStripe\Versioned\Versioned;


class Hospital extends ReflectivePoint
{

    private static $db = [
        'Grade' => 'Varchar',
        'Tub' => 'Boolean',
        
    ];


    private static $has_one = [
        'Cave' => Cave::class,
        
    ];


    private static $has_many = [
        'Shades' => Shade::class,
        'SuddenIceTrades' => SuddenIceTrade::class,
        'SpicyCoasts' => SpicyCoast::class,
        
    ];




    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Hospital';

}