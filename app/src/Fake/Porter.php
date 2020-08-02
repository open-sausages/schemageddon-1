<?php





class Porter extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Judge' => 'Int',
        
    ];


    private static $has_one = [
        'AlikeSheep' => AlikeSheep::class,
        
    ];




    private static $belongs_many_many = [
        'TightfistedChannelDivision' => TightfistedChannelDivision::class,
        
    ];


    private static $table_name = 'Porter';

}