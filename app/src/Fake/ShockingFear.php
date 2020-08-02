<?php





class ShockingFear extends \Page
{

    private static $db = [
        'Dinosaurs' => 'Varchar',
        'Property' => 'Varchar',
        'Spot' => 'Varchar',
        
    ];


    private static $has_one = [
        'SqueamishPopcornPlayground' => SqueamishPopcornPlayground::class,
        'PanickyFairiesJudge' => PanickyFairiesJudge::class,
        
    ];




    private static $belongs_many_many = [
        'HelpfulAgreement' => HelpfulAgreement::class,
        'EfficaciousTreesHat' => EfficaciousTreesHat::class,
        
    ];


    private static $table_name = 'ShockingFear';

}