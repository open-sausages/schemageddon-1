<?php





class Dinosaurs extends \Page
{

    private static $db = [
        'Cap' => 'Text',
        'Wheel' => 'Varchar',
        
    ];


    private static $has_one = [
        'CurvedPlace' => CurvedPlace::class,
        'ThoughtfulNeedCars' => ThoughtfulNeedCars::class,
        
    ];




    private static $belongs_many_many = [
        'Thing' => Thing::class,
        
    ];


    private static $table_name = 'Dinosaurs';

}