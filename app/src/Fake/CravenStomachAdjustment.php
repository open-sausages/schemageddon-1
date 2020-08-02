<?php




use SilverStripe\Versioned\Versioned;


class CravenStomachAdjustment extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Trees' => 'Text',
        'Liquid' => 'Varchar',
        
    ];


    private static $has_one = [
        'EfficaciousTreesHat' => EfficaciousTreesHat::class,
        'TitleRecord' => TitleRecord::class,
        
    ];




    private static $belongs_many_many = [
        'HelpfulAgreement' => HelpfulAgreement::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'CravenStomachAdjustment';

}