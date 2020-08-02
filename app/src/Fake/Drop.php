<?php




use SilverStripe\Versioned\Versioned;


class Drop extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Mitten' => 'Int',
        
    ];




    private static $many_many = [
        'ThoughtlessObservations' => ThoughtlessObservation::class,
        'IndustriousGrandmotherUmbrellas' => IndustriousGrandmotherUmbrella::class,
        
    ];



    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Drop';

}