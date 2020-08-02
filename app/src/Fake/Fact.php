<?php





class Fact extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Tiger' => 'Boolean',
        'Trouble' => 'Varchar',
        'Bridge' => 'Text',
        'Ice' => 'Text',
        
    ];


    private static $has_one = [
        'Key' => Key::class,
        
    ];




    private static $belongs_many_many = [
        'ProfuseFairies' => ProfuseFairies::class,
        
    ];


    private static $table_name = 'Fact';

}