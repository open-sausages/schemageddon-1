<?php





class TabooFear extends \Page
{

    private static $db = [
        'Bike' => 'Text',
        'Road' => 'Int',
        
    ];


    private static $has_one = [
        'Badge' => Badge::class,
        
    ];




    private static $belongs_many_many = [
        'Thing' => Thing::class,
        'Angle' => Angle::class,
        
    ];


    private static $table_name = 'TabooFear';

}