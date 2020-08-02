<?php




use SilverStripe\Versioned\Versioned;


class Cakes extends Bulb
{

    private static $db = [
        'View' => 'Varchar',
        'Ice' => 'Varchar',
        'Exchange' => 'Text',
        'Loss' => 'Boolean',
        'Observation' => 'Varchar',
        
    ];


    private static $has_one = [
        'CooperativeExistenceNight' => CooperativeExistenceNight::class,
        'CuddlyBoard' => CuddlyBoard::class,
        
    ];




    private static $belongs_many_many = [
        'AheadFriend' => AheadFriend::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Cakes';

}