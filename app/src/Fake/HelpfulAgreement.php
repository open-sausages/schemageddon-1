<?php




use SilverStripe\Versioned\Versioned;


class HelpfulAgreement extends \Page
{

    private static $db = [
        'Sea' => 'Int',
        'Spot' => 'Text',
        'Rabbits' => 'Varchar',
        'Coal' => 'Int',
        
    ];


    private static $has_one = [
        'Cast' => Cast::class,
        'CoherentCaveReligion' => CoherentCaveReligion::class,
        'Haircut' => Haircut::class,
        'FierceBridgeBeef' => FierceBridgeBeef::class,
        
    ];


    private static $has_many = [
        'IndustriousGrandmotherUmbrellas' => IndustriousGrandmotherUmbrella::class,
        'Chickenss' => Chickens::class,
        
    ];


    private static $many_many = [
        'Feelings' => Feeling::class,
        'ShockingFears' => ShockingFear::class,
        'CravenStomachAdjustments' => CravenStomachAdjustment::class,
        
    ];


    private static $belongs_many_many = [
        'PanickyFairiesJudge' => PanickyFairiesJudge::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'HelpfulAgreement';

}