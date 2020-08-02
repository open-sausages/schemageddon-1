<?php




use SilverStripe\Versioned\Versioned;


class Hobbies extends \Page
{

    private static $db = [
        'Suit' => 'Varchar',
        'Doctor' => 'Varchar',
        'Story' => 'Varchar',
        'Smoke' => 'Int',
        'Women' => 'Text',
        
    ];


    private static $has_one = [
        'Committee' => Committee::class,
        'EliteCrib' => EliteCrib::class,
        'Soap' => Soap::class,
        
    ];





    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Hobbies';

}