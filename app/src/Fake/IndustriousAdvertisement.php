<?php




use SilverStripe\Versioned\Versioned;


class IndustriousAdvertisement extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Boot' => 'Boolean',
        'Test' => 'Varchar',
        'Duck' => 'Text',
        
    ];


    private static $has_one = [
        'WeakCoatSock' => WeakCoatSock::class,
        'Porter' => Porter::class,
        'Top' => Top::class,
        
    ];





    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'IndustriousAdvertisement';

}