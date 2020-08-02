<?php




use SilverStripe\Versioned\Versioned;


class DisturbedShow extends Hospital
{

    private static $db = [
        'Test' => 'Text',
        'Hands' => 'Varchar',
        'Tendency' => 'Text',
        'Wine' => 'Boolean',
        
    ];




    private static $many_many = [
        'ReconditeVolleyballMittens' => ReconditeVolleyballMitten::class,
        
    ];


    private static $belongs_many_many = [
        'PanickyChickens' => PanickyChickens::class,
        'Range' => Range::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'DisturbedShow';

}