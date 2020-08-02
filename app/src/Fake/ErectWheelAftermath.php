<?php





class ErectWheelAftermath extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Coast' => 'Varchar',
        'Cake' => 'Int',
        'Coat' => 'Boolean',
        
    ];


    private static $has_one = [
        'FierceGrandmotherThread' => FierceGrandmotherThread::class,
        'RightSign' => RightSign::class,
        'HistoricalSlip' => HistoricalSlip::class,
        
    ];





    private static $table_name = 'ErectWheelAftermath';

}