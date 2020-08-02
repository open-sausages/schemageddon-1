<?php





class AttractiveQuietHospital extends \Page
{

    private static $db = [
        'Dirt' => 'Int',
        
    ];





    private static $belongs_many_many = [
        'Committee' => Committee::class,
        'MaterialisticStomachCave' => MaterialisticStomachCave::class,
        
    ];


    private static $table_name = 'AttractiveQuietHospital';

}