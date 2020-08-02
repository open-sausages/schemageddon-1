<?php





class Jar extends \Page
{

    private static $db = [
        'Smoke' => 'Text',
        'Legs' => 'Text',
        
    ];


    private static $has_one = [
        'Range' => Range::class,
        
    ];





    private static $table_name = 'Jar';

}