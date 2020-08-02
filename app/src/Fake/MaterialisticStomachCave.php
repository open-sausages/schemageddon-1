<?php





class MaterialisticStomachCave extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Hat' => 'Text',
        'Jar' => 'Int',
        'Swing' => 'Int',
        'Activity' => 'Varchar',
        'View' => 'Varchar',
        
    ];


    private static $has_one = [
        'LeftTrain' => LeftTrain::class,
        
    ];



    private static $many_many = [
        'JoblessRoads' => JoblessRoad::class,
        'Tubs' => Tub::class,
        'AttractiveQuietHospitals' => AttractiveQuietHospital::class,
        
    ];


    private static $belongs_many_many = [
        'Umbrella' => Umbrella::class,
        'TastyBadge' => TastyBadge::class,
        
    ];


    private static $table_name = 'MaterialisticStomachCave';

}