<?php





class CurvedPlace extends PanickyChickens
{

    private static $db = [
        'Current' => 'Text',
        'Train' => 'Text',
        
    ];


    private static $has_one = [
        'GlisteningDropRoom' => GlisteningDropRoom::class,
        'LamentableFactWheel' => LamentableFactWheel::class,
        'StripedVestQuiver' => StripedVestQuiver::class,
        
    ];




    private static $belongs_many_many = [
        'ThoughtlessEnd' => ThoughtlessEnd::class,
        
    ];


    private static $table_name = 'CurvedPlace';

}