<?php





class HistoricalYard extends \Page
{

    private static $db = [
        'Aftermath' => 'Text',
        
    ];


    private static $has_one = [
        'HelpfulChannelBirds' => HelpfulChannelBirds::class,
        'EliteKittensNight' => EliteKittensNight::class,
        'Room' => Room::class,
        
    ];





    private static $table_name = 'HistoricalYard';

}