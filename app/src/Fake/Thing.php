<?php





class Thing extends LowCloth
{

    private static $db = [
        'Income' => 'Varchar',
        'Veil' => 'Varchar',
        'Balance' => 'Text',
        'Ladybug' => 'Int',
        
    ];


    private static $has_one = [
        'Boot' => Boot::class,
        'BumpyCave' => BumpyCave::class,
        
    ];



    private static $many_many = [
        'Dinosaurss' => Dinosaurs::class,
        'TabooFears' => TabooFear::class,
        
    ];



    private static $table_name = 'Thing';

}