<?php





class TightfistedChannelDivision extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Grade' => 'Varchar',
        
    ];


    private static $has_one = [
        'BoundlessDoctorBead' => BoundlessDoctorBead::class,
        
    ];



    private static $many_many = [
        'Porters' => Porter::class,
        'Caves' => Cave::class,
        
    ];


    private static $belongs_many_many = [
        'Bridge' => Bridge::class,
        
    ];


    private static $table_name = 'TightfistedChannelDivision';

}