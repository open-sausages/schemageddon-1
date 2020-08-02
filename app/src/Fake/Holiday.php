<?php





class Holiday extends \Page
{

    private static $db = [
        'Ladybug' => 'Varchar',
        'Soap' => 'Boolean',
        
    ];


    private static $has_one = [
        'Spot' => Spot::class,
        
    ];





    private static $table_name = 'Holiday';

}