<?php





class TastyBadge extends \Page
{

    private static $db = [
        'Chickens' => 'Int',
        'Watch' => 'Text',
        'Temper' => 'Int',
        
    ];


    private static $has_one = [
        'CooperativeExistenceNight' => CooperativeExistenceNight::class,
        'ReconditeVolleyballMitten' => ReconditeVolleyballMitten::class,
        'Room' => Room::class,
        
    ];



    private static $many_many = [
        'Bellss' => Bells::class,
        'MaterialisticStomachCaves' => MaterialisticStomachCave::class,
        
    ];



    private static $table_name = 'TastyBadge';

}