<?php





class FierceGrandmotherThread extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Support' => 'Boolean',
        'Wave' => 'Varchar',
        'Basket' => 'Int',
        
    ];


    private static $has_one = [
        'ThoughtfulNeedCars' => ThoughtfulNeedCars::class,
        'ProfuseFairies' => ProfuseFairies::class,
        'CoherentCaveReligion' => CoherentCaveReligion::class,
        'GrotesqueJail' => GrotesqueJail::class,
        'HorribleSuit' => HorribleSuit::class,
        
    ];



    private static $many_many = [
        'ErectAftermathJudges' => ErectAftermathJudge::class,
        
    ];



    private static $table_name = 'FierceGrandmotherThread';

}