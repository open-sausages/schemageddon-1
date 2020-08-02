<?php





class JoblessRoad extends \Page
{

    private static $db = [
        'Soda' => 'Varchar',
        'Point' => 'Boolean',
        'Slip' => 'Boolean',
        'Vest' => 'Int',
        
    ];


    private static $has_one = [
        'UnadvisedSupportVeil' => UnadvisedSupportVeil::class,
        
    ];


    private static $has_many = [
        'Caves' => Cave::class,
        'HorribleSuits' => HorribleSuit::class,
        'PleasantRanges' => PleasantRange::class,
        
    ];


    private static $many_many = [
        'AheadFairiesBridges' => AheadFairiesBridge::class,
        'ErectAftermathJudges' => ErectAftermathJudge::class,
        'CurvedWashTops' => CurvedWashTop::class,
        
    ];


    private static $belongs_many_many = [
        'MaterialisticStomachCave' => MaterialisticStomachCave::class,
        'Ducks' => Ducks::class,
        
    ];


    private static $table_name = 'JoblessRoad';

}