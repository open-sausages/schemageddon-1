<?php




use SilverStripe\Versioned\Versioned;


class StormyGhostQuestion extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Committee' => 'Varchar',
        'Flowers' => 'Varchar',
        'Boot' => 'Text',
        'Porter' => 'Int',
        'Toy' => 'Text',
        
    ];


    private static $has_one = [
        'Shade' => Shade::class,
        'EtherealPlaceRoad' => EtherealPlaceRoad::class,
        'ReconditeYard' => ReconditeYard::class,
        
    ];





    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'StormyGhostQuestion';

}