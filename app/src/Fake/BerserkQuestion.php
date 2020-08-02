<?php




use SilverStripe\Versioned\Versioned;


class BerserkQuestion extends \Page
{

    private static $db = [
        'Slip' => 'Int',
        'Playground' => 'Boolean',
        'Shade' => 'Varchar',
        'Umbrella' => 'Int',
        'Fear' => 'Int',
        
    ];


    private static $has_one = [
        'PastEnd' => PastEnd::class,
        'Cars' => Cars::class,
        'CeaselessKittens' => CeaselessKittens::class,
        
    ];





    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'BerserkQuestion';

}