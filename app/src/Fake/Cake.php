<?php




use SilverStripe\Versioned\Versioned;


class Cake extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Religion' => 'Int',
        'Lock' => 'Int',
        'Month' => 'Varchar',
        'Sleep' => 'Text',
        'Rabbits' => 'Varchar',
        
    ];






    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Cake';

}