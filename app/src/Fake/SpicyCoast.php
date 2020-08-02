<?php





class SpicyCoast extends \Page
{

    private static $db = [
        'Volleyball' => 'Int',
        'Animal' => 'Text',
        'Basket' => 'Text',
        
    ];


    private static $has_one = [
        'Hospital' => Hospital::class,
        'Yard' => Yard::class,
        
    ];



    private static $many_many = [
        'HeavyDucksChannels' => HeavyDucksChannel::class,
        'LeftTrains' => LeftTrain::class,
        'Religions' => Religion::class,
        
    ];



    private static $table_name = 'SpicyCoast';

}