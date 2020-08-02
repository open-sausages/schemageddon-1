<?php





class MightyTrainDoor extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Boot' => 'Boolean',
        'Property' => 'Boolean',
        'Stretch' => 'Int',
        
    ];


    private static $has_one = [
        'SmellySmokeCast' => SmellySmokeCast::class,
        
    ];


    private static $has_many = [
        'Advertisements' => Advertisement::class,
        'PumpedAdjustments' => PumpedAdjustment::class,
        
    ];




    private static $table_name = 'MightyTrainDoor';

}