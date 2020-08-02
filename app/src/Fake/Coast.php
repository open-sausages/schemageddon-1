<?php





class Coast extends \Page
{

    private static $db = [
        'Cap' => 'Varchar',
        'Test' => 'Int',
        'Smell' => 'Varchar',
        'Aftermath' => 'Varchar',
        'Cream' => 'Text',
        
    ];


    private static $has_one = [
        'Wash' => Wash::class,
        
    ];




    private static $belongs_many_many = [
        'ThoughtfulNeedCars' => ThoughtfulNeedCars::class,
        'WeakCoatSock' => WeakCoatSock::class,
        
    ];


    private static $table_name = 'Coast';

}