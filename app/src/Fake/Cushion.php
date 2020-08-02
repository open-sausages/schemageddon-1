<?php





class Cushion extends Spot
{

    private static $db = [
        'Pleasure' => 'Int',
        'Sock' => 'Varchar',
        'Need' => 'Int',
        'Rake' => 'Varchar',
        
    ];


    private static $has_one = [
        'RightSign' => RightSign::class,
        'TitleRecord' => TitleRecord::class,
        'WhitePleasureObservation' => WhitePleasureObservation::class,
        
    ];


    private static $has_many = [
        'WeakCoatSocks' => WeakCoatSock::class,
        'TabooHydrantRegrets' => TabooHydrantRegret::class,
        
    ];




    private static $table_name = 'Cushion';

}