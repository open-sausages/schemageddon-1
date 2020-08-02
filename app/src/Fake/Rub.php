<?php





class Rub extends Feeling
{

    private static $db = [
        'Hill' => 'Varchar',
        'Theory' => 'Int',
        'Spark' => 'Boolean',
        
    ];


    private static $has_one = [
        'QuarrelsomeRabbits' => QuarrelsomeRabbits::class,
        'LowLadybug' => LowLadybug::class,
        'RealHobbies' => RealHobbies::class,
        
    ];





    private static $table_name = 'Rub';

}