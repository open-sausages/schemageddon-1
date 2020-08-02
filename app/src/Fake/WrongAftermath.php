<?php




use SilverStripe\Versioned\Versioned;


class WrongAftermath extends \Page
{

    private static $db = [
        'Volleyball' => 'Boolean',
        'Dirt' => 'Varchar',
        'Loss' => 'Int',
        
    ];


    private static $has_one = [
        'WrongFlavor' => WrongFlavor::class,
        
    ];




    private static $belongs_many_many = [
        'SuddenIceTrade' => SuddenIceTrade::class,
        'WakefulRub' => WakefulRub::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'WrongAftermath';

}