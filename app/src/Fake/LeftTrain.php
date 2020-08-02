<?php





class LeftTrain extends TenderHate
{

    private static $db = [
        'Hobbies' => 'Varchar',
        'Move' => 'Boolean',
        
    ];


    private static $has_one = [
        'LowCloth' => LowCloth::class,
        'Cave' => Cave::class,
        'WakefulRub' => WakefulRub::class,
        
    ];


    private static $has_many = [
        'MaterialisticStomachCaves' => MaterialisticStomachCave::class,
        
    ];



    private static $belongs_many_many = [
        'SpicyCoast' => SpicyCoast::class,
        'HappyMoveReason' => HappyMoveReason::class,
        
    ];


    private static $table_name = 'LeftTrain';

}