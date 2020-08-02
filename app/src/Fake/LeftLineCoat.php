<?php





class LeftLineCoat extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Balance' => 'Text',
        'Cars' => 'Varchar',
        'Cellar' => 'Boolean',
        'Drawer' => 'Boolean',
        
    ];






    private static $table_name = 'LeftLineCoat';

}