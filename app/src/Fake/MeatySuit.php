<?php




use SilverStripe\Versioned\Versioned;


class MeatySuit extends \Page
{

    private static $db = [
        'Flavor' => 'Text',
        'Thing' => 'Boolean',
        
    ];






    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'MeatySuit';

}