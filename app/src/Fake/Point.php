<?php





class Point extends \Page
{

    private static $db = [
        'Volleyball' => 'Varchar',
        'Profit' => 'Boolean',
        'Advertisement' => 'Text',
        'Tiger' => 'Text',
        'Night' => 'Boolean',
        
    ];


    private static $has_one = [
        'AttractiveQuietHospital' => AttractiveQuietHospital::class,
        'RebelHat' => RebelHat::class,
        'Holiday' => Holiday::class,
        
    ];


    private static $has_many = [
        'SturdyBabiesHospitals' => SturdyBabiesHospital::class,
        'UppityVests' => UppityVest::class,
        'AlikeSwings' => AlikeSwing::class,
        
    ];



    private static $belongs_many_many = [
        'Religion' => Religion::class,
        
    ];


    private static $table_name = 'Point';

}