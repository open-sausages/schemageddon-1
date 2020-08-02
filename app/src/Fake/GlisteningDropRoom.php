<?php





class GlisteningDropRoom extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Bead' => 'Boolean',
        'Advertisement' => 'Text',
        'Scarf' => 'Boolean',
        'Tendency' => 'Boolean',
        
    ];


    private static $has_one = [
        'Hobbies' => Hobbies::class,
        'LeftSuit' => LeftSuit::class,
        
    ];


    private static $has_many = [
        'Advertisements' => Advertisement::class,
        'HeavyDucksChannels' => HeavyDucksChannel::class,
        'CurvedPlaces' => CurvedPlace::class,
        
    ];



    private static $belongs_many_many = [
        'MeltedStoveSpark' => MeltedStoveSpark::class,
        
    ];


    private static $table_name = 'GlisteningDropRoom';

}