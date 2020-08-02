<?php





class Month extends \Page
{

    private static $db = [
        'Flowers' => 'Text',
        
    ];


    private static $has_one = [
        'Committee' => Committee::class,
        
    ];


    private static $has_many = [
        'Rooms' => Room::class,
        'CeaselessBoards' => CeaselessBoard::class,
        
    ];




    private static $table_name = 'Month';

}