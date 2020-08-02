<?php





class Crib extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Support' => 'Text',
        'Channel' => 'Varchar',
        'Test' => 'Int',
        
    ];






    private static $table_name = 'Crib';

}