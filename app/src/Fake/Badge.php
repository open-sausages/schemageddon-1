<?php





class Badge extends \Page
{

    private static $db = [
        'Baby' => 'Text',
        'Line' => 'Boolean',
        
    ];


    private static $has_one = [
        'Bells' => Bells::class,
        
    ];


    private static $has_many = [
        'TabooFears' => TabooFear::class,
        
    ];


    private static $many_many = [
        'CoherentCaveReligions' => CoherentCaveReligion::class,
        
    ];


    private static $belongs_many_many = [
        'BumpyCave' => BumpyCave::class,
        'HighpitchedCommitteeYard' => HighpitchedCommitteeYard::class,
        
    ];


    private static $table_name = 'Badge';

}