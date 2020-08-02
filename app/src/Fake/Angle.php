<?php




use SilverStripe\Versioned\Versioned;


class Angle extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Veil' => 'Varchar',
        'End' => 'Boolean',
        
    ];


    private static $has_one = [
        'Yard' => Yard::class,
        'LamentableFactWheel' => LamentableFactWheel::class,
        'Agreement' => Agreement::class,
        'CurvedWashTop' => CurvedWashTop::class,
        
    ];



    private static $many_many = [
        'Channels' => Channel::class,
        'TabooFears' => TabooFear::class,
        
    ];



    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Angle';

}