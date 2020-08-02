<?php





class CoherentCaveReligion extends \Page
{

    private static $db = [
        'Vest' => 'Varchar',
        'Religion' => 'Int',
        'Start' => 'Varchar',
        
    ];


    private static $has_one = [
        'LamentableFactWheel' => LamentableFactWheel::class,
        'Holiday' => Holiday::class,
        'FierceBulb' => FierceBulb::class,
        
    ];




    private static $belongs_many_many = [
        'Badge' => Badge::class,
        
    ];


    private static $table_name = 'CoherentCaveReligion';

}