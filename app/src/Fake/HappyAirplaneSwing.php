<?php





class HappyAirplaneSwing extends \Page
{

    private static $db = [
        'Straw' => 'Boolean',
        'Teeth' => 'Text',
        
    ];


    private static $has_one = [
        'AlikeSheep' => AlikeSheep::class,
        
    ];





    private static $table_name = 'HappyAirplaneSwing';

}