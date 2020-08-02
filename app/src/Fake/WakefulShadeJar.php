<?php





class WakefulShadeJar extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Coal' => 'Varchar',
        'Income' => 'Text',
        'Grandmother' => 'Varchar',
        'Sheep' => 'Int',
        'Toy' => 'Int',
        
    ];


    private static $has_one = [
        'Cave' => Cave::class,
        'CurvedWashTop' => CurvedWashTop::class,
        
    ];





    private static $table_name = 'WakefulShadeJar';

}