<?php





class JitteryUmbrella extends \Page
{

    private static $db = [
        'Trouble' => 'Varchar',
        'Crib' => 'Boolean',
        'Drawer' => 'Boolean',
        'Range' => 'Varchar',
        
    ];


    private static $has_one = [
        'ThoughtfulNeedCars' => ThoughtfulNeedCars::class,
        'HeavyDucksChannel' => HeavyDucksChannel::class,
        'Hobbies' => Hobbies::class,
        
    ];


    private static $has_many = [
        'PanickyFairiesJudges' => PanickyFairiesJudge::class,
        'PumpedAdjustments' => PumpedAdjustment::class,
        'ShortScarfPoints' => ShortScarfPoint::class,
        
    ];




    private static $table_name = 'JitteryUmbrella';

}