<?php




use SilverStripe\Versioned\Versioned;


class TabooHydrantRegret extends Theory
{

    private static $db = [
        'Cast' => 'Varchar',
        'Kitty' => 'Int',
        'Writer' => 'Varchar',
        
    ];


    private static $has_one = [
        'Cars' => Cars::class,
        'Cushion' => Cushion::class,
        
    ];





    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'TabooHydrantRegret';

}