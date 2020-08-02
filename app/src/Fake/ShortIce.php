<?php




use SilverStripe\Versioned\Versioned;


class ShortIce extends \Page
{

    private static $db = [
        'Hydrant' => 'Varchar',
        'Drawer' => 'Boolean',
        'Snakes' => 'Int',
        'Judge' => 'Varchar',
        
    ];


    private static $has_one = [
        'Range' => Range::class,
        'PleasantRange' => PleasantRange::class,
        
    ];




    private static $belongs_many_many = [
        'WeakCoatSock' => WeakCoatSock::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'ShortIce';

}