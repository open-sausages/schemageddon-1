<?php





class IndustriousGrandmotherUmbrella extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Ghost' => 'Varchar',
        'Badge' => 'Int',
        'End' => 'Boolean',
        'Coat' => 'Int',
        'Stretch' => 'Varchar',
        
    ];


    private static $has_one = [
        'HelpfulAgreement' => HelpfulAgreement::class,
        
    ];



    private static $many_many = [
        'UndesirableBeefs' => UndesirableBeef::class,
        
    ];


    private static $belongs_many_many = [
        'Drop' => Drop::class,
        
    ];


    private static $table_name = 'IndustriousGrandmotherUmbrella';

}