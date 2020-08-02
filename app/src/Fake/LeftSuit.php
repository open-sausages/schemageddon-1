<?php





class LeftSuit extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Office' => 'Boolean',
        'Existence' => 'Boolean',
        'Top' => 'Text',
        
    ];


    private static $has_one = [
        'Cave' => Cave::class,
        
    ];





    private static $table_name = 'LeftSuit';

}