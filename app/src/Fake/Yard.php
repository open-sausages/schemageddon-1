<?php





class Yard extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Chickens' => 'Boolean',
        
    ];


    private static $has_one = [
        'CurvedSheepNeed' => CurvedSheepNeed::class,
        'HorribleSuit' => HorribleSuit::class,
        'AheadFriend' => AheadFriend::class,
        
    ];


    private static $has_many = [
        'Angles' => Angle::class,
        'SpicyCoasts' => SpicyCoast::class,
        'Channels' => Channel::class,
        
    ];



    private static $belongs_many_many = [
        'CutShade' => CutShade::class,
        
    ];


    private static $table_name = 'Yard';

}