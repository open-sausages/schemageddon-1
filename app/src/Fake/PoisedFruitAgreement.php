<?php





class PoisedFruitAgreement extends \Page
{

    private static $db = [
        'Reason' => 'Text',
        'Fact' => 'Text',
        'Coal' => 'Text',
        'Observation' => 'Int',
        'Start' => 'Text',
        
    ];




    private static $many_many = [
        'Pigss' => Pigs::class,
        'HorribleSuits' => HorribleSuit::class,
        
    ];



    private static $table_name = 'PoisedFruitAgreement';

}