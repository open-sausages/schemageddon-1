<?php





class PleasantRange extends \Page
{

    private static $db = [
        'Thread' => 'Boolean',
        
    ];


    private static $has_one = [
        'JoblessRoad' => JoblessRoad::class,
        
    ];





    private static $table_name = 'PleasantRange';

}