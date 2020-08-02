<?php





class SuddenIceTrade extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Religion' => 'Text',
        'Effect' => 'Int',
        'View' => 'Boolean',
        'Fear' => 'Text',
        'Babies' => 'Text',
        
    ];


    private static $has_one = [
        'Hospital' => Hospital::class,
        'ReadyBirdsKey' => ReadyBirdsKey::class,
        'TabooHydrantRegret' => TabooHydrantRegret::class,
        
    ];



    private static $many_many = [
        'WrongAftermaths' => WrongAftermath::class,
        
    ];



    private static $table_name = 'SuddenIceTrade';

}