<?php




use SilverStripe\Versioned\Versioned;


class AbundantTiger extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Control' => 'Varchar',
        'Snakes' => 'Varchar',
        
    ];


    private static $has_one = [
        'Cast' => Cast::class,
        
    ];


    private static $has_many = [
        'Soaps' => Soap::class,
        
    ];



    private static $belongs_many_many = [
        'WhitePleasureObservation' => WhitePleasureObservation::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'AbundantTiger';

}