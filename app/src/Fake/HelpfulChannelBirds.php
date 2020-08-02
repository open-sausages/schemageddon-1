<?php





class HelpfulChannelBirds extends \Page
{

    private static $db = [
        'Slip' => 'Boolean',
        'Fear' => 'Boolean',
        
    ];



    private static $has_many = [
        'EtherealPlaceRoads' => EtherealPlaceRoad::class,
        'HistoricalYards' => HistoricalYard::class,
        'Shows' => Show::class,
        
    ];




    private static $table_name = 'HelpfulChannelBirds';

}