<?php





class Committee extends \Page
{

    private static $db = [
        'Bead' => 'Boolean',
        'Top' => 'Int',
        'Umbrella' => 'Boolean',
        'Night' => 'Varchar',
        'End' => 'Varchar',
        
    ];


    private static $has_one = [
        'UppityVest' => UppityVest::class,
        
    ];


    private static $has_many = [
        'Hobbiess' => Hobbies::class,
        'Caves' => Cave::class,
        'Months' => Month::class,
        
    ];


    private static $many_many = [
        'AttractiveQuietHospitals' => AttractiveQuietHospital::class,
        'Shows' => Show::class,
        'LivelyDucksTrains' => LivelyDucksTrain::class,
        
    ];


    private static $belongs_many_many = [
        'ThoughtfulNeedCars' => ThoughtfulNeedCars::class,
        
    ];


    private static $table_name = 'Committee';

}