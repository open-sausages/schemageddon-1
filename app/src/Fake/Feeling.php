<?php




use SilverStripe\Versioned\Versioned;


class Feeling extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Test' => 'Int',
        'Toy' => 'Int',
        'Wine' => 'Boolean',
        'View' => 'Int',
        
    ];


    private static $has_one = [
        'CeaselessKittens' => CeaselessKittens::class,
        'Advertisement' => Advertisement::class,
        
    ];


    private static $has_many = [
        'ThoughtlessEnds' => ThoughtlessEnd::class,
        'Popcorns' => Popcorn::class,
        
    ];



    private static $belongs_many_many = [
        'HelpfulAgreement' => HelpfulAgreement::class,
        
    ];


    private static $extensions = [
        Versioned::class,
    ];

    private static $table_name = 'Feeling';

}