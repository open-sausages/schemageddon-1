<?php





class WoodenBulb extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Doctor' => 'Boolean',
        'Porter' => 'Text',
        'Bridge' => 'Text',
        'Theory' => 'Varchar',
        'Sea' => 'Text',
        
    ];



    private static $has_many = [
        'Umbrellas' => Umbrella::class,
        
    ];



    private static $belongs_many_many = [
        'PanickyFairiesJudge' => PanickyFairiesJudge::class,
        
    ];


    private static $table_name = 'WoodenBulb';

}