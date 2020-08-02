<?php




use SilverStripe\Versioned\Versioned;


class Level extends \Page
{

    private static $db = [
        'Ghost' => 'Int',
        'Judge' => 'Int',
        
    ];





    private static $belongs_many_many = [
        'HypnoticControlDoctor' => HypnoticControlDoctor::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Level';

}