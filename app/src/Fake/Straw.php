<?php




use SilverStripe\Versioned\Versioned;


class Straw extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Board' => 'Int',
        
    ];



    private static $has_many = [
        'TenderHates' => TenderHate::class,
        'AggressiveStretchPigss' => AggressiveStretchPigs::class,
        'HappyAirplaneSwings' => HappyAirplaneSwing::class,
        
    ];




    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Straw';

}