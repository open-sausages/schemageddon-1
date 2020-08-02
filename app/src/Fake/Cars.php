<?php




use SilverStripe\Versioned\Versioned;


class Cars extends \Page
{

    private static $db = [
        'Support' => 'Text',
        'Scarf' => 'Boolean',
        'Salt' => 'Varchar',
        'Doctor' => 'Text',
        
    ];


    private static $has_one = [
        'RightSign' => RightSign::class,
        
    ];


    private static $has_many = [
        'TabooHydrantRegrets' => TabooHydrantRegret::class,
        
    ];




    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Cars';

}