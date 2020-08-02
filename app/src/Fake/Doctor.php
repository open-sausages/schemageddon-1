<?php




use SilverStripe\Versioned\Versioned;


class Doctor extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'End' => 'Text',
        'Tub' => 'Text',
        'Lock' => 'Text',
    ];


    private static $has_one = [
        'Agreement' => Agreement::class,
        
    ];




    private static $belongs_many_many = [
        'TitleRecord' => TitleRecord::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Doctor';

}