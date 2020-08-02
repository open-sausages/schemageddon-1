<?php





class CuddlyBoard extends \Page
{

    private static $db = [
        'Train' => 'Int',
        
    ];



    private static $has_many = [
        'Cakess' => Cakes::class,
        
    ];




    private static $table_name = 'CuddlyBoard';

}