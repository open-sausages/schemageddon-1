<?php





class AlikeSheep extends \Page
{

    private static $db = [
        'War' => 'Boolean',
        'Cap' => 'Boolean',
        'Support' => 'Text',
        
    ];


    private static $has_one = [
        'HistoricalSlip' => HistoricalSlip::class,
        'QuarrelsomeRabbits' => QuarrelsomeRabbits::class,
        
    ];


    private static $has_many = [
        'FierceBulbs' => FierceBulb::class,
        'HappyAirplaneSwings' => HappyAirplaneSwing::class,
        
    ];



    private static $belongs_many_many = [
        'HypnoticControlDoctor' => HypnoticControlDoctor::class,
        
    ];


    private static $table_name = 'AlikeSheep';

}