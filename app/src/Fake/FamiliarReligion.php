<?php




use SilverStripe\Versioned\Versioned;


class FamiliarReligion extends \Page
{

    private static $db = [
        'Thing' => 'Boolean',
        'Trade' => 'Boolean',
        'Crib' => 'Boolean',
        
    ];





    private static $belongs_many_many = [
        'EtherealPlaceRoad' => EtherealPlaceRoad::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'FamiliarReligion';

}