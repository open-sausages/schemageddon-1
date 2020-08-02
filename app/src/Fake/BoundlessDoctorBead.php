<?php





class BoundlessDoctorBead extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Pleasure' => 'Boolean',
        'Ladybug' => 'Boolean',
        'Sock' => 'Int',
        
    ];



    private static $has_many = [
        'BrightSofas' => BrightSofa::class,
        'TightfistedChannelDivisions' => TightfistedChannelDivision::class,
        
    ];




    private static $table_name = 'BoundlessDoctorBead';

}