<?php





class PanickyBeefPull extends \Page
{

    private static $db = [
        'Quiet' => 'Varchar',
        'Lock' => 'Int',
        'Slip' => 'Boolean',
        'Sleep' => 'Varchar',
        'Basket' => 'Text',
        
    ];



    private static $has_many = [
        'SmellySmokeCasts' => SmellySmokeCast::class,
        
    ];




    private static $table_name = 'PanickyBeefPull';

}