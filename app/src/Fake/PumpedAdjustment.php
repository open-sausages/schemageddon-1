<?php




use SilverStripe\Versioned\Versioned;


class PumpedAdjustment extends \Page
{

    private static $db = [
        'Night' => 'Text',
        'Haircut' => 'Int',
        'Quiver' => 'Boolean',
        'Cast' => 'Varchar',
        'Pencil' => 'Text',
        
    ];


    private static $has_one = [
        'JitteryUmbrella' => JitteryUmbrella::class,
        'MightyTrainDoor' => MightyTrainDoor::class,
        
    ];




    private static $belongs_many_many = [
        'HappyMoveReason' => HappyMoveReason::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'PumpedAdjustment';

}