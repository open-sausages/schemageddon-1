<?php





class EagerHill extends \Page
{

    private static $db = [
        'Advertisement' => 'Text',
        'Health' => 'Text',
        'Liquid' => 'Varchar',
        'Key' => 'Varchar',
        
    ];


    private static $has_one = [
        'SmellySmokeCast' => SmellySmokeCast::class,
        
    ];





    private static $table_name = 'EagerHill';

}