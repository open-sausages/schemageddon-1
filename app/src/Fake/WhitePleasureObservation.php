<?php





class WhitePleasureObservation extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Bells' => 'Varchar',
        'Coat' => 'Text',
        'War' => 'Boolean',
        'Soap' => 'Varchar',
        'Yard' => 'Boolean',
        
    ];




    private static $many_many = [
        'FineBaskets' => FineBasket::class,
        'AbundantTigers' => AbundantTiger::class,
        'CeaselessKittenss' => CeaselessKittens::class,
        
    ];



    private static $table_name = 'WhitePleasureObservation';

}