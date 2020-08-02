<?php





class ErectAftermathJudge extends \Page
{

    private static $db = [
        'Bike' => 'Int',
        'Swing' => 'Text',
        'Station' => 'Varchar',
        
    ];





    private static $belongs_many_many = [
        'RealHobbies' => RealHobbies::class,
        'WakefulRub' => WakefulRub::class,
        'JoblessRoad' => JoblessRoad::class,
        'FierceGrandmotherThread' => FierceGrandmotherThread::class,
        
    ];


    private static $table_name = 'ErectAftermathJudge';

}