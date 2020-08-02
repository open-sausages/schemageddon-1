<?php





class Grip extends \Page
{

    private static $db = [
        'Cellar' => 'Varchar',
        'Pigs' => 'Text',
        'Coat' => 'Int',
        
    ];


    private static $has_one = [
        'Show' => Show::class,
        
    ];





    private static $table_name = 'Grip';

}