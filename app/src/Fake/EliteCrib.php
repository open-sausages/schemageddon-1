<?php





class EliteCrib extends \Page
{

    private static $db = [
        'Veil' => 'Varchar',
        
    ];


    private static $has_one = [
        'WhiteExchange' => WhiteExchange::class,
        'Grip' => Grip::class,
        'WoodenBulb' => WoodenBulb::class,
        
    ];



    private static $many_many = [
        'SturdyBabiesHospitals' => SturdyBabiesHospital::class,
        
    ];



    private static $table_name = 'EliteCrib';

}