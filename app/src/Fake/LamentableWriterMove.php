<?php





class LamentableWriterMove extends \Page
{

    private static $db = [
        'Slip' => 'Varchar',
        'Income' => 'Int',
        'Sign' => 'Text',
        'Wine' => 'Boolean',
        
    ];


    private static $has_one = [
        'HolisticSmell' => HolisticSmell::class,
        'RightSign' => RightSign::class,
        'WakefulRub' => WakefulRub::class,
        'Chickens' => Chickens::class,
        
    ];





    private static $table_name = 'LamentableWriterMove';

}