<?php





class BriefSparkHospital extends ThoughtfulNeedCars
{

    private static $db = [
        'Trouble' => 'Text',
        'Vest' => 'Boolean',
        'Pleasure' => 'Boolean',
        
    ];


    private static $has_one = [
        'PleasantRange' => PleasantRange::class,
        'Straw' => Straw::class,
        'Sheep' => Sheep::class,
        
    ];



    private static $many_many = [
        'Caves' => Cave::class,
        
    ];


    private static $belongs_many_many = [
        'EfficaciousTreesHat' => EfficaciousTreesHat::class,
        
    ];


    private static $table_name = 'BriefSparkHospital';

}