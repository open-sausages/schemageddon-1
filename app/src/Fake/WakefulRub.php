<?php





class WakefulRub extends \Page
{

    private static $db = [
        'Test' => 'Varchar',
        'Division' => 'Int',
        
    ];



    private static $has_many = [
        'WhiteExchanges' => WhiteExchange::class,
        'Bridges' => Bridge::class,
        'LeftTrains' => LeftTrain::class,
        
    ];


    private static $many_many = [
        'HighpitchedRegretCakes' => HighpitchedRegretCake::class,
        'ErectAftermathJudges' => ErectAftermathJudge::class,
        'WrongAftermaths' => WrongAftermath::class,
        
    ];



    private static $table_name = 'WakefulRub';

}