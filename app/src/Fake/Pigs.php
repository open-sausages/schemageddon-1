<?php




use SilverStripe\Versioned\Versioned;


class Pigs extends \Page
{

    private static $db = [
        'Swing' => 'Int',
        'Fear' => 'Text',
        
    ];





    private static $belongs_many_many = [
        'PoisedFruitAgreement' => PoisedFruitAgreement::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Pigs';

}