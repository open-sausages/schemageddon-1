<?php




use SilverStripe\Versioned\Versioned;


class Tub extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Basket' => 'Text',
        'Show' => 'Int',
        
    ];





    private static $belongs_many_many = [
        'MaterialisticStomachCave' => MaterialisticStomachCave::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Tub';

}