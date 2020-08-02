<?php




use SilverStripe\Versioned\Versioned;


class LowLadybug extends \Page
{

    private static $db = [
        'Sign' => 'Boolean',
        'Quiver' => 'Int',
        'Spot' => 'Text',
        'Badge' => 'Boolean',
        'Babies' => 'Varchar',
        
    ];






    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'LowLadybug';

}