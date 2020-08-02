<?php





class QuarrelsomeRabbits extends \Page
{

    private static $db = [
        'Angle' => 'Boolean',
        'Key' => 'Boolean',
        'Umbrella' => 'Boolean',
        
    ];


    private static $has_one = [
        'CeaselessKittens' => CeaselessKittens::class,
        'ProfuseFairies' => ProfuseFairies::class,
        'Spot' => Spot::class,
        'BriefSparkHospital' => BriefSparkHospital::class,
        'CravenStomachAdjustment' => CravenStomachAdjustment::class,
        
    ];


    private static $has_many = [
        'AlikeSheeps' => AlikeSheep::class,
        
    ];




    private static $table_name = 'QuarrelsomeRabbits';

}