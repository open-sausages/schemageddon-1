<?php





class RightSign extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Religion' => 'Varchar',
        
    ];


    private static $has_one = [
        'ActuallyMittenActivity' => ActuallyMittenActivity::class,
        
    ];


    private static $has_many = [
        'Carss' => Cars::class,
        'Cushions' => Cushion::class,
        
    ];



    private static $belongs_many_many = [
        'Spot' => Spot::class,
        
    ];


    private static $table_name = 'RightSign';

}