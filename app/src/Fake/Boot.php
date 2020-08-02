<?php





class Boot extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Basket' => 'Text',
        'Advertisement' => 'Boolean',
        'Smell' => 'Varchar',
        'Station' => 'Text',
        'Feeling' => 'Boolean',
        
    ];


    private static $has_one = [
        'BriefSparkHospital' => BriefSparkHospital::class,
        
    ];


    private static $has_many = [
        'Things' => Thing::class,
        
    ];



    private static $belongs_many_many = [
        'AlikeSwing' => AlikeSwing::class,
        
    ];


    private static $table_name = 'Boot';

}