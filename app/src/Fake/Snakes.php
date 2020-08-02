<?php





class Snakes extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Hate' => 'Text',
        'Board' => 'Varchar',
        'Boot' => 'Boolean',
        'Chickens' => 'Text',
        'Existence' => 'Text',
        
    ];


    private static $has_one = [
        'Cars' => Cars::class,
        'EtherealPlaceRoad' => EtherealPlaceRoad::class,
        'EagerHill' => EagerHill::class,
        
    ];





    private static $table_name = 'Snakes';

}