<?php





class EtherealLossSpark extends \Page
{

    private static $db = [
        'Airplane' => 'Boolean',
        'Tiger' => 'Int',
        'Sofa' => 'Int',
        'Ice' => 'Varchar',
        
    ];




    private static $many_many = [
        'WoodenTheoryScarfs' => WoodenTheoryScarf::class,
        
    ];



    private static $table_name = 'EtherealLossSpark';

}