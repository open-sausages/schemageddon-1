<?php





class Bridge extends \Page
{

    private static $db = [
        'Adjustment' => 'Int',
        'Scarf' => 'Boolean',
        'Crib' => 'Boolean',
        
    ];


    private static $has_one = [
        'CravenStomachAdjustment' => CravenStomachAdjustment::class,
        'WakefulRub' => WakefulRub::class,
        'Chickens' => Chickens::class,
        'BumpyCave' => BumpyCave::class,
        
    ];



    private static $many_many = [
        'Channels' => Channel::class,
        'TightfistedChannelDivisions' => TightfistedChannelDivision::class,
        'CapriciousTitles' => CapriciousTitle::class,
        
    ];


    private static $belongs_many_many = [
        'FineSleep' => FineSleep::class,
        
    ];


    private static $table_name = 'Bridge';

}