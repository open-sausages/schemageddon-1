<?php





class ThoughtlessEnd extends \Page
{

    private static $db = [
        'Sheep' => 'Boolean',
        
    ];


    private static $has_one = [
        'Feeling' => Feeling::class,
        'WoodenTheoryScarf' => WoodenTheoryScarf::class,
        'MeltedStoveSpark' => MeltedStoveSpark::class,
        
    ];



    private static $many_many = [
        'Troubles' => Trouble::class,
        'CurvedPlaces' => CurvedPlace::class,
        
    ];


    private static $belongs_many_many = [
        'ThoughtfulNeedCars' => ThoughtfulNeedCars::class,
        
    ];


    private static $table_name = 'ThoughtlessEnd';

}