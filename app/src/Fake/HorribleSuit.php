<?php





class HorribleSuit extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Feeling' => 'Varchar',
        'End' => 'Text',
        
    ];


    private static $has_one = [
        'JoblessRoad' => JoblessRoad::class,
        
    ];




    private static $belongs_many_many = [
        'PoisedFruitAgreement' => PoisedFruitAgreement::class,
        
    ];


    private static $table_name = 'HorribleSuit';

}