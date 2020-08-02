<?php





class UppityVest extends ThoughtfulNeedCars
{

    private static $db = [
        'Umbrella' => 'Boolean',
        'Cream' => 'Text',
        'Gate' => 'Text',
        
    ];


    private static $has_one = [
        'Point' => Point::class,
        'Soap' => Soap::class,
        'Fact' => Fact::class,
        
    ];


    private static $has_many = [
        'Committees' => Committee::class,
        'HighpitchedRegretCakes' => HighpitchedRegretCake::class,
        
    ];


    private static $many_many = [
        'UnadvisedSupportVeils' => UnadvisedSupportVeil::class,
        
    ];


    private static $belongs_many_many = [
        'AbsentLadybug' => AbsentLadybug::class,
        
    ];


    private static $table_name = 'UppityVest';

}