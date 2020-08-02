<?php





class HappyMoveReason extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Lock' => 'Int',
        'Suit' => 'Varchar',
        
    ];


    private static $has_one = [
        'LowCloth' => LowCloth::class,
        'Agreement' => Agreement::class,
        
    ];



    private static $many_many = [
        'PumpedAdjustments' => PumpedAdjustment::class,
        'LeftTrains' => LeftTrain::class,
        
    ];



    private static $table_name = 'HappyMoveReason';

}