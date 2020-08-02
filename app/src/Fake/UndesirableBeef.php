<?php





class UndesirableBeef extends \Page
{

    private static $db = [
        'Road' => 'Varchar',
        
    ];





    private static $belongs_many_many = [
        'IndustriousGrandmotherUmbrella' => IndustriousGrandmotherUmbrella::class,
    ];


    private static $table_name = 'UndesirableBeef';

}