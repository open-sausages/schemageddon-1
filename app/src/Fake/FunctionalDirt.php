<?php





class FunctionalDirt extends \Page
{

    private static $db = [
        'Cellar' => 'Int',
        'View' => 'Text',
        'War' => 'Int',
        'Suit' => 'Boolean',
        
    ];


    private static $has_one = [
        'Crib' => Crib::class,
        'Pigs' => Pigs::class,
        
    ];





    private static $table_name = 'FunctionalDirt';

}