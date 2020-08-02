<?php





class Popcorn extends \Page
{

    private static $db = [
        'Aftermath' => 'Int',
        'Bells' => 'Varchar',
        'Sneeze' => 'Boolean',
        
    ];


    private static $has_one = [
        'Feeling' => Feeling::class,
        'PleasantRange' => PleasantRange::class,
        'AlikeSwing' => AlikeSwing::class,
        'PanickyChickens' => PanickyChickens::class,
        
    ];



    private static $many_many = [
        'AbrasiveCoatRanges' => AbrasiveCoatRange::class,
        
    ];


    private static $belongs_many_many = [
        'CuriousSparkThread' => CuriousSparkThread::class,
        
    ];


    private static $table_name = 'Popcorn';

}