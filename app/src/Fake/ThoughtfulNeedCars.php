<?php




use SilverStripe\Versioned\Versioned;


class ThoughtfulNeedCars extends \Page
{

    private static $db = [
        'Babies' => 'Int',
        'Wash' => 'Int',
        'Sign' => 'Int',
        'Playground' => 'Int',
        
    ];


    private static $has_one = [
        'Key' => Key::class,
        'CapriciousTitle' => CapriciousTitle::class,
        'PanickyBeefPull' => PanickyBeefPull::class,
        
    ];


    private static $has_many = [
        'FierceGrandmotherThreads' => FierceGrandmotherThread::class,
        
    ];


    private static $many_many = [
        'Coasts' => Coast::class,
        'ThoughtlessEnds' => ThoughtlessEnd::class,
        'Committees' => Committee::class,
        
    ];



    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'ThoughtfulNeedCars';

}