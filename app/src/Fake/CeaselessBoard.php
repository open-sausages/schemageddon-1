<?php





class CeaselessBoard extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Playground' => 'Int',
        'Fairies' => 'Int',
        'Place' => 'Varchar',
        
    ];


    private static $has_one = [
        'ThoughtfulNeedCars' => ThoughtfulNeedCars::class,
        'Shade' => Shade::class,
        'Month' => Month::class,
        
    ];





    private static $table_name = 'CeaselessBoard';

}