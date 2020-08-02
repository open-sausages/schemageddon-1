<?php





class Cave extends \Page
{

    private static $db = [
        'Spot' => 'Boolean',
        'Hands' => 'Boolean',
        'Basket' => 'Boolean',
        'Wine' => 'Boolean',
        
    ];


    private static $has_one = [
        'Committee' => Committee::class,
        'MaterialisticStomachCave' => MaterialisticStomachCave::class,
        'Ducks' => Ducks::class,
        'LowCloth' => LowCloth::class,
        'JoblessRoad' => JoblessRoad::class,
        
    ];


    private static $has_many = [
        'Hospitals' => Hospital::class,
        'LeftSuits' => LeftSuit::class,
        'WakefulShadeJars' => WakefulShadeJar::class,
        
    ];



    private static $belongs_many_many = [
        'BriefSparkHospital' => BriefSparkHospital::class,
        'TightfistedChannelDivision' => TightfistedChannelDivision::class,
        
    ];


    private static $table_name = 'Cave';

}