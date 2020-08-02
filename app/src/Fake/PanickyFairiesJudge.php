<?php




use SilverStripe\Versioned\Versioned;


class PanickyFairiesJudge extends \Page
{

    private static $db = [
        'Regret' => 'Int',
        'Sofa' => 'Text',
        'Pencil' => 'Int',
        'Swing' => 'Text',
        
    ];


    private static $has_one = [
        'JitteryUmbrella' => JitteryUmbrella::class,
        'RealYard' => RealYard::class,
        
    ];


    private static $has_many = [
        'ShockingFears' => ShockingFear::class,
        
    ];


    private static $many_many = [
        'HelpfulAgreements' => HelpfulAgreement::class,
        'WoodenBulbs' => WoodenBulb::class,
        
    ];



    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'PanickyFairiesJudge';

}