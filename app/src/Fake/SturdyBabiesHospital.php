<?php





class SturdyBabiesHospital extends \Page
{

    private static $db = [
        'TitleRecord' => 'Boolean',
        'Dinosaurs' => 'Boolean',
        'Basket' => 'Boolean',
        'Gate' => 'Boolean',
        
    ];


    private static $has_one = [
        'Point' => Point::class,
        
    ];



    private static $many_many = [
        'WoodenTheoryScarfs' => WoodenTheoryScarf::class,
        
    ];


    private static $belongs_many_many = [
        'EliteCrib' => EliteCrib::class,
        
    ];


    private static $table_name = 'SturdyBabiesHospital';

}