<?php





class ProfuseFairies extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Observation' => 'Text',
        
    ];


    private static $has_one = [
        'QuarrelsomeRabbits' => QuarrelsomeRabbits::class,
        'HelpfulChannelBirds' => HelpfulChannelBirds::class,
        'JoblessRoad' => JoblessRoad::class,
        'AbrasiveExchangeShade' => AbrasiveExchangeShade::class,
        
    ];


    private static $has_many = [
        'QuarrelsomeRabbitss' => QuarrelsomeRabbits::class,
        'FineSleeps' => FineSleep::class,
        'FierceGrandmotherThreads' => FierceGrandmotherThread::class,
        
    ];


    private static $many_many = [
        'ReconditeVolleyballMittens' => ReconditeVolleyballMitten::class,
        'Facts' => Fact::class,
        
    ];



    private static $table_name = 'ProfuseFairies';

}