<?php




use SilverStripe\Versioned\Versioned;


class Cast extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Kitty' => 'Text',
        'Rabbits' => 'Text',
        
    ];


    private static $has_one = [
        'LamentableWriterMove' => LamentableWriterMove::class,
        
    ];


    private static $has_many = [
        'AbundantTigers' => AbundantTiger::class,
        'HelpfulAgreements' => HelpfulAgreement::class,
        
    ];



    private static $belongs_many_many = [
        'AmbiguousDuck' => AmbiguousDuck::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Cast';

}