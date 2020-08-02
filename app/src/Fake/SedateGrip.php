<?php





class SedateGrip extends SmellySodaRoom
{

    private static $db = [
        'Bike' => 'Boolean',
        'Fairies' => 'Varchar',
        'Wave' => 'Text',
        'Kitty' => 'Int',
        'Range' => 'Int',
        
    ];


    private static $has_one = [
        'Feeling' => Feeling::class,
        
    ];





    private static $table_name = 'SedateGrip';

}