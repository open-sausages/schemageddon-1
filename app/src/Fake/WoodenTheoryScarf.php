<?php





class WoodenTheoryScarf extends \Page
{

    private static $db = [
        'Scarf' => 'Text',
        'Cave' => 'Varchar',
        'Gate' => 'Varchar',
        'Smell' => 'Boolean',
        
    ];





    private static $belongs_many_many = [
        'EtherealLossSpark' => EtherealLossSpark::class,
        'SturdyBabiesHospital' => SturdyBabiesHospital::class,
        
    ];


    private static $table_name = 'WoodenTheoryScarf';

}