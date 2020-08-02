<?php





class Shade extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Tiger' => 'Varchar',
        'Crib' => 'Varchar',
        
    ];


    private static $has_one = [
        'Hospital' => Hospital::class,
        'CurvedWashTop' => CurvedWashTop::class,
        
    ];


    private static $has_many = [
        'StormyGhostQuestions' => StormyGhostQuestion::class,
        'FierceBulbs' => FierceBulb::class,
        'CeaselessBoards' => CeaselessBoard::class,
        
    ];




    private static $table_name = 'Shade';

}