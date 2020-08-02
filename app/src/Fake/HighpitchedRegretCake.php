<?php





class HighpitchedRegretCake extends \Page
{

    private static $db = [
        'Chickens' => 'Text',
        
    ];


    private static $has_one = [
        'ThoughtlessObservation' => ThoughtlessObservation::class,
        'UppityVest' => UppityVest::class,
        
    ];




    private static $belongs_many_many = [
        'WakefulRub' => WakefulRub::class,
        
    ];


    private static $table_name = 'HighpitchedRegretCake';

}