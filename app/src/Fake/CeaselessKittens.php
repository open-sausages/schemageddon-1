<?php





class CeaselessKittens extends \Page
{

    private static $db = [
        'Agreement' => 'Boolean',
        'Pleasure' => 'Text',
        
    ];



    private static $has_many = [
        'RealHobbiess' => RealHobbies::class,
        'QuarrelsomeRabbitss' => QuarrelsomeRabbits::class,
        
    ];


    private static $many_many = [
        'Sheeps' => Sheep::class,
        'HolisticSmells' => HolisticSmell::class,
        
    ];


    private static $belongs_many_many = [
        'WhitePleasureObservation' => WhitePleasureObservation::class,
        
    ];


    private static $table_name = 'CeaselessKittens';

}