<?php





class Kittens extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Cushion' => 'Text',
        'Size' => 'Int',
        'Bells' => 'Text',
        'Dirt' => 'Boolean',
        
    ];


    private static $has_one = [
        'TitleRecord' => TitleRecord::class,
        'Ducks' => Ducks::class,
        'Ducks' => Ducks::class,
        
    ];




    private static $belongs_many_many = [
        'MindlessSmoke' => MindlessSmoke::class,
        'BumpyCave' => BumpyCave::class,
        
    ];


    private static $table_name = 'Kittens';

}