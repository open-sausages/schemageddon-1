<?php




use SilverStripe\Versioned\Versioned;


class EliteKittensNight extends Yard
{

    private static $db = [
        'Yard' => 'Text',
        'Ice' => 'Text',
        'Wheel' => 'Text',
        
    ];


    private static $has_one = [
        'Religion' => Religion::class,
        'Trade' => Trade::class,
        
    ];



    private static $many_many = [
        'AheadFriends' => AheadFriend::class,
        
    ];



    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'EliteKittensNight';

}