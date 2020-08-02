<?php





class ReflectivePoint extends \Page
{

    private static $db = [
        'Wash' => 'Int',
        
    ];


    private static $has_one = [
        'MightyTrainDoor' => MightyTrainDoor::class,
        'AlikeSwing' => AlikeSwing::class,
        
    ];





    private static $table_name = 'ReflectivePoint';

}