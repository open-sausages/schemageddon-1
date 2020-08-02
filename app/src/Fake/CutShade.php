<?php





class CutShade extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Door' => 'Boolean',
        'Advertisement' => 'Text',
        'Fruit' => 'Text',
        'Feeling' => 'Int',
        'Attack' => 'Int',
        
    ];



    private static $has_many = [
        'Advertisements' => Advertisement::class,
        
    ];


    private static $many_many = [
        'ReadyBirdsKeys' => ReadyBirdsKey::class,
        'AheadFriends' => AheadFriend::class,
        'Yards' => Yard::class,
        
    ];



    private static $table_name = 'CutShade';

}