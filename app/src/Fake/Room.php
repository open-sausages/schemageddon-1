<?php




use SilverStripe\Versioned\Versioned;


class Room extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Soap' => 'Text',
        'Bone' => 'Boolean',
        'Spot' => 'Varchar',
        
    ];


    private static $has_one = [
        'Month' => Month::class,
        'StormyAttackFriend' => StormyAttackFriend::class,
        'ShortIce' => ShortIce::class,
        
    ];


    private static $has_many = [
        'HistoricalYards' => HistoricalYard::class,
        'CutEffectBoards' => CutEffectBoard::class,
        'TastyBadges' => TastyBadge::class,
        
    ];




    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Room';

}