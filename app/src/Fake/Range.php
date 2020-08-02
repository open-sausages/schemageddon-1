<?php




use SilverStripe\Versioned\Versioned;


class Range extends \Page
{

    private static $db = [
        'Cave' => 'Int',
        'Regret' => 'Varchar',
        'Attack' => 'Boolean',
        
    ];


    private static $has_one = [
        'ReconditeVolleyballMitten' => ReconditeVolleyballMitten::class,
        
    ];



    private static $many_many = [
        'Sheeps' => Sheep::class,
        'DisturbedShows' => DisturbedShow::class,
        
    ];



    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Range';

}