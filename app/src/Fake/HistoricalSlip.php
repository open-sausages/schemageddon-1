<?php




use SilverStripe\Versioned\Versioned;


class HistoricalSlip extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Key' => 'Boolean',
        'Tendency' => 'Int',
        
    ];




    private static $many_many = [
        'Troubles' => Trouble::class,
        'Channels' => Channel::class,
        
    ];


    private static $belongs_many_many = [
        'AlikeSwing' => AlikeSwing::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'HistoricalSlip';

}