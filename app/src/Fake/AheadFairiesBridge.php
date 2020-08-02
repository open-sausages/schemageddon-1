<?php




use SilverStripe\Versioned\Versioned;


class AheadFairiesBridge extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Beef' => 'Text',
        'Bridge' => 'Text',
        
    ];


    private static $has_one = [
        'LamentableFactWheel' => LamentableFactWheel::class,
        
    ];




    private static $belongs_many_many = [
        'AlikeSwing' => AlikeSwing::class,
        'JoblessRoad' => JoblessRoad::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'AheadFairiesBridge';

}