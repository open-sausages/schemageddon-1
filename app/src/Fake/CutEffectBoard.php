<?php





class CutEffectBoard extends \Page
{

    private static $db = [
        'Sea' => 'Int',
        'Bulb' => 'Int',
        
    ];


    private static $has_one = [
        'CoherentCaveReligion' => CoherentCaveReligion::class,
        'PanickyChickens' => PanickyChickens::class,
        'ShockingFear' => ShockingFear::class,
        'Room' => Room::class,
        
    ];





    private static $table_name = 'CutEffectBoard';

}