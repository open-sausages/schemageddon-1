<?php





class ShortScarfPoint extends \Page
{

    private static $db = [
        'Hydrant' => 'Varchar',
        'Sofa' => 'Text',
        'Health' => 'Text',
        
    ];


    private static $has_one = [
        'JitteryUmbrella' => JitteryUmbrella::class,
        
    ];


    private static $has_many = [
        'LowCloths' => LowCloth::class,
        'TenderHates' => TenderHate::class,
        
    ];




    private static $table_name = 'ShortScarfPoint';

}