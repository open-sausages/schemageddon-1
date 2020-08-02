<?php





class Wash extends Kittens
{

    private static $db = [
        'End' => 'Varchar',
        'Religion' => 'Varchar',
        'Move' => 'Boolean',
        'Flowers' => 'Int',
        
    ];


    private static $has_one = [
        'Spot' => Spot::class,
        
    ];


    private static $has_many = [
        'Coasts' => Coast::class,
        
    ];



    private static $belongs_many_many = [
        'TitleRecord' => TitleRecord::class,
        
    ];


    private static $table_name = 'Wash';

}