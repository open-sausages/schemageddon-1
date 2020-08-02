<?php





class Sheep extends \Page
{

    private static $db = [
        'Adjustment' => 'Text',
        'Agreement' => 'Varchar',
        'Bulb' => 'Varchar',
        'Popcorn' => 'Text',
        'Cake' => 'Varchar',
        
    ];





    private static $belongs_many_many = [
        'CeaselessKittens' => CeaselessKittens::class,
        'Range' => Range::class,
        
    ];


    private static $table_name = 'Sheep';

}