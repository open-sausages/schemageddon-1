<?php





class WindyJudge extends \Page
{

    private static $db = [
        'Ducks' => 'Text',
        'Sleep' => 'Text',
        'Ice' => 'Text',
        
    ];


    private static $has_one = [
        'DispensableAftermath' => DispensableAftermath::class,
        
    ];




    private static $belongs_many_many = [
        'FineSleep' => FineSleep::class,
        
    ];


    private static $table_name = 'WindyJudge';

}