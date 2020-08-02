<?php





class LamentableFactWheel extends \Page
{

    private static $db = [
        'Bike' => 'Text',
        'Sea' => 'Boolean',
        'Babies' => 'Int',
        'Cave' => 'Int',
        'Need' => 'Int',
        
    ];


    private static $has_one = [
        'ProfuseFairies' => ProfuseFairies::class,
        'ShockingFear' => ShockingFear::class,
        'Wash' => Wash::class,
        
    ];





    private static $table_name = 'LamentableFactWheel';

}