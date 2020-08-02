<?php




use SilverStripe\Versioned\Versioned;


class RebelHat extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Income' => 'Int',
        'Angle' => 'Int',
        'Bike' => 'Varchar',
        'Start' => 'Varchar',
        'Drawer' => 'Varchar',
        
    ];


    private static $has_one = [
        'PastEnd' => PastEnd::class,
        'Watch' => Watch::class,
        'SturdyBabiesHospital' => SturdyBabiesHospital::class,
        
    ];




    private static $belongs_many_many = [
        'MeltedStoveSpark' => MeltedStoveSpark::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'RebelHat';

}