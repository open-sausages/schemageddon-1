<?php





class HolisticSmell extends \Page
{

    private static $db = [
        'Temper' => 'Int',
        'Jail' => 'Boolean',
        
    ];


    private static $has_one = [
        'Key' => Key::class,
        'Kittens' => Kittens::class,
        'MindlessSmoke' => MindlessSmoke::class,
        
    ];




    private static $belongs_many_many = [
        'CeaselessKittens' => CeaselessKittens::class,
        'Religion' => Religion::class,
        
    ];


    private static $table_name = 'HolisticSmell';

}