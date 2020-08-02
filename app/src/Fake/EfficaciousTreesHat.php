<?php





class EfficaciousTreesHat extends \Page
{

    private static $db = [
        'Jail' => 'Boolean',
        
    ];


    private static $has_one = [
        'Show' => Show::class,
        
    ];



    private static $many_many = [
        'ShockingFears' => ShockingFear::class,
        'BriefSparkHospitals' => BriefSparkHospital::class,
        
    ];



    private static $table_name = 'EfficaciousTreesHat';

}