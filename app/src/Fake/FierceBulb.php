<?php





class FierceBulb extends \Page
{

    private static $db = [
        'Pull' => 'Int',
        'Profit' => 'Boolean',
        'Cave' => 'Text',
        
    ];


    private static $has_one = [
        'AlikeSheep' => AlikeSheep::class,
        'Shade' => Shade::class,
        
    ];





    private static $table_name = 'FierceBulb';

}