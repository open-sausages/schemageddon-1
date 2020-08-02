<?php





class HypnoticControlDoctor extends \Page
{

    private static $db = [
        'Line' => 'Int',
        'Month' => 'Varchar',
        'Volleyball' => 'Varchar',
        'Legs' => 'Varchar',
        'Aftermath' => 'Boolean',
        
    ];


    private static $has_one = [
        'Crib' => Crib::class,
        
    ];



    private static $many_many = [
        'Levels' => Level::class,
        'AlikeSheeps' => AlikeSheep::class,
        
    ];



    private static $table_name = 'HypnoticControlDoctor';

}