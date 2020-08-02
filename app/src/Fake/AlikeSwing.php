<?php





class AlikeSwing extends \Page
{

    private static $db = [
        'Yak' => 'Int',
        'Question' => 'Boolean',
        
    ];


    private static $has_one = [
        'Point' => Point::class,
        'ShortIce' => ShortIce::class,
        'Doctor' => Doctor::class,
        'Bells' => Bells::class,
        
    ];



    private static $many_many = [
        'HistoricalSlips' => HistoricalSlip::class,
        'Boots' => Boot::class,
        'AheadFairiesBridges' => AheadFairiesBridge::class,
        
    ];



    private static $table_name = 'AlikeSwing';

}