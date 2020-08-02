<?php




use SilverStripe\Versioned\Versioned;


class Religion extends \Page
{

    private static $db = [
        'Control' => 'Int',
        'Rub' => 'Text',
        'Advertisement' => 'Varchar',
        
    ];




    private static $many_many = [
        'HolisticSmells' => HolisticSmell::class,
        'Points' => Point::class,
        
    ];


    private static $belongs_many_many = [
        'SpicyCoast' => SpicyCoast::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Religion';

}