<?php





class DispensableAftermath extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Hate' => 'Boolean',
        
    ];



    private static $has_many = [
        'CapriciousTitles' => CapriciousTitle::class,
        'WindyJudges' => WindyJudge::class,
        
    ];



    private static $belongs_many_many = [
        'ReadyBirdsKey' => ReadyBirdsKey::class,
        
    ];


    private static $table_name = 'DispensableAftermath';

}