<?php




use SilverStripe\Versioned\Versioned;


class Bulb extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Drop' => 'Varchar',
        'Grip' => 'Varchar',
        'Fruit' => 'Varchar',
        'Tub' => 'Int',
        
    ];


    private static $has_one = [
        'AggressiveStretchPigs' => AggressiveStretchPigs::class,
        'Point' => Point::class,
        
    ];





    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Bulb';

}