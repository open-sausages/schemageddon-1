<?php




use SilverStripe\Versioned\Versioned;


class TitleRecord extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Hate' => 'Varchar',
        'Bike' => 'Int',
        'Temper' => 'Boolean',
        'Profit' => 'Text',
        
    ];


    private static $has_one = [
        'ErectWheelAftermath' => ErectWheelAftermath::class,
        'PumpedAdjustment' => PumpedAdjustment::class,
        
    ];



    private static $many_many = [
        'UndesirableBeefs' => UndesirableBeef::class,
        'Doctors' => Doctor::class,
        'Washs' => Wash::class,
        
    ];


    private static $belongs_many_many = [
        'HighpitchedCommitteeYard' => HighpitchedCommitteeYard::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'TitleRecord';

}