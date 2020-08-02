<?php





class PastEnd extends \Page
{

    private static $db = [
        'Spot' => 'Varchar',
        'Beef' => 'Boolean',
        'Smell' => 'Varchar',
        'Adjustment' => 'Int',
        
    ];


    private static $has_one = [
        'HypnoticControlDoctor' => HypnoticControlDoctor::class,
        
    ];





    private static $table_name = 'PastEnd';

}