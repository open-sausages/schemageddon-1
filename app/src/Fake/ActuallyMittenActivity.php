<?php




use SilverStripe\Versioned\Versioned;


class ActuallyMittenActivity extends \Page
{

    private static $db = [
        'Division' => 'Varchar',
        'Religion' => 'Boolean',
        'Current' => 'Text',
        'Pigs' => 'Varchar',
        'Pencil' => 'Text',
        
    ];


    private static $has_one = [
        'BriefSparkHospital' => BriefSparkHospital::class,
        'MeatySuit' => MeatySuit::class,
        'ReconditeYard' => ReconditeYard::class,
        'CuriousSparkThread' => CuriousSparkThread::class,
        
    ];





    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'ActuallyMittenActivity';

}