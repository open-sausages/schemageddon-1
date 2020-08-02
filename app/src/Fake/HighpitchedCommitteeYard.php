<?php




use SilverStripe\Versioned\Versioned;


class HighpitchedCommitteeYard extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Theory' => 'Boolean',
        'Observation' => 'Varchar',
        'Teeth' => 'Varchar',
        
    ];


    private static $has_one = [
        'BumpyCave' => BumpyCave::class,
        'CravenStomachAdjustment' => CravenStomachAdjustment::class,
        'FierceGrandmotherThread' => FierceGrandmotherThread::class,
        'TastyBadge' => TastyBadge::class,
        
    ];



    private static $many_many = [
        'Badges' => Badge::class,
        'SmellySmokeCasts' => SmellySmokeCast::class,
        'Titles' => TitleRecord::class,
        
    ];



    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'HighpitchedCommitteeYard';

}