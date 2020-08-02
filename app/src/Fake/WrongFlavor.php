<?php





class WrongFlavor extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Smell' => 'Int',
        
    ];


    private static $has_one = [
        'CooperativeExistenceNight' => CooperativeExistenceNight::class,
        'MindlessSmoke' => MindlessSmoke::class,
        
    ];





    private static $table_name = 'WrongFlavor';

}