<?php




use SilverStripe\Versioned\Versioned;


class Baby extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Profit' => 'Boolean',
        
    ];


    private static $has_one = [
        'Chickens' => Chickens::class,
        'Dinosaurs' => Dinosaurs::class,
        'SturdyBabiesHospital' => SturdyBabiesHospital::class,
        
    ];





    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Baby';

}