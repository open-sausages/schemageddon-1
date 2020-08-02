<?php




use SilverStripe\Versioned\Versioned;


class FineSleep extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Dirt' => 'Varchar',
        'Legs' => 'Text',
        'Porter' => 'Int',
        
    ];


    private static $has_one = [
        'ProfuseFairies' => ProfuseFairies::class,
        'SmellySmokeCast' => SmellySmokeCast::class,
        
    ];



    private static $many_many = [
        'WindyJudges' => WindyJudge::class,
        'Bridges' => Bridge::class,
        
    ];



    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'FineSleep';

}