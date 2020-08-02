<?php




use SilverStripe\Versioned\Versioned;


class AheadFriend extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Quiet' => 'Varchar',
        'Rabbits' => 'Text',
        'Current' => 'Int',
        'Cars' => 'Boolean',
        'Hobbies' => 'Varchar',
        
    ];


    private static $has_one = [
        'ShortIce' => ShortIce::class,
        'LamentableWriterMove' => LamentableWriterMove::class,
        'RightSign' => RightSign::class,
        
    ];



    private static $many_many = [
        'Cakess' => Cakes::class,
        
    ];


    private static $belongs_many_many = [
        'EliteKittensNight' => EliteKittensNight::class,
        'CutShade' => CutShade::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'AheadFriend';

}