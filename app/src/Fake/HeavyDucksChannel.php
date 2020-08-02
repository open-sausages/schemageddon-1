<?php





class HeavyDucksChannel extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Ladybug' => 'Int',
        'Start' => 'Varchar',
        'Holiday' => 'Boolean',
        
    ];


    private static $has_one = [
        'Room' => Room::class,
        'Popcorn' => Popcorn::class,
        'GlisteningDropRoom' => GlisteningDropRoom::class,
        
    ];




    private static $belongs_many_many = [
        'SpicyCoast' => SpicyCoast::class,
        
    ];


    private static $table_name = 'HeavyDucksChannel';

}