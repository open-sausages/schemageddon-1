<?php





class MindlessSmoke extends CeaselessKittens
{

    private static $db = [
        'Angle' => 'Varchar',
        'Basket' => 'Text',
        'Sea' => 'Boolean',
        'Boot' => 'Varchar',
        
    ];




    private static $many_many = [
        'Kittenss' => Kittens::class,
        
    ];


    private static $belongs_many_many = [
        'ReadyBirdsKey' => ReadyBirdsKey::class,
        
    ];


    private static $table_name = 'MindlessSmoke';

}