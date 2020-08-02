<?php





class FarflungChickensLegs extends \Page
{

    private static $db = [
        'Hate' => 'Text',
        'View' => 'Int',
        'Wash' => 'Boolean',
        'Reason' => 'Int',
        'Hydrant' => 'Text',
        
    ];


    private static $has_one = [
        'AheadFairiesBridge' => AheadFairiesBridge::class,
        'Pigs' => Pigs::class,
        
    ];





    private static $table_name = 'FarflungChickensLegs';

}