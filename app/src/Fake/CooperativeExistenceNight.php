<?php




use SilverStripe\Versioned\Versioned;


class CooperativeExistenceNight extends \Page
{

    private static $db = [
        'Hill' => 'Varchar',
        
    ];


    private static $has_one = [
        'Cast' => Cast::class,
        'QuarrelsomeRabbits' => QuarrelsomeRabbits::class,
        'CeaselessKittens' => CeaselessKittens::class,
        
    ];


    private static $has_many = [
        'TastyBadges' => TastyBadge::class,
        'Cakess' => Cakes::class,
        'WrongFlavors' => WrongFlavor::class,
        
    ];




    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'CooperativeExistenceNight';

}