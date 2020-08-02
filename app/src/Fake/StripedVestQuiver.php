<?php





class StripedVestQuiver extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Writer' => 'Int',
        'Support' => 'Boolean',
        'Doctor' => 'Text',
        'Spot' => 'Int',
        
    ];


    private static $has_one = [
        'Umbrella' => Umbrella::class,
        'FunctionalDirt' => FunctionalDirt::class,
        'AheadFairiesBridge' => AheadFairiesBridge::class,
        
    ];





    private static $table_name = 'StripedVestQuiver';

}