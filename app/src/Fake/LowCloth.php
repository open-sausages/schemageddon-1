<?php




use SilverStripe\Versioned\Versioned;


class LowCloth extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Pigs' => 'Int',
        
    ];


    private static $has_one = [
        'ShortScarfPoint' => ShortScarfPoint::class,
        
    ];





    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'LowCloth';

}