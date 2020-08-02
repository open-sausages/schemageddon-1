<?php





class CurvedSheepNeed extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'TitleRecord' => 'Varchar',
        'Wash' => 'Varchar',
        'Key' => 'Boolean',
        'Women' => 'Int',
        
    ];


    private static $has_one = [
        'CuddlyBoard' => CuddlyBoard::class,
        
    ];





    private static $table_name = 'CurvedSheepNeed';

}