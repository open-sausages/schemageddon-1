<?php




use SilverStripe\Versioned\Versioned;


class CapriciousTitle extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Industry' => 'Varchar',
        'Swing' => 'Varchar',
        'Soap' => 'Int',
        
    ];


    private static $has_one = [
        'DispensableAftermath' => DispensableAftermath::class,
        
    ];




    private static $belongs_many_many = [
        'Bridge' => Bridge::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'CapriciousTitle';

}