<?php





class SmellySmokeCast extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Chickens' => 'Int',
        'Mitten' => 'Varchar',
        
    ];


    private static $has_one = [
        'PanickyBeefPull' => PanickyBeefPull::class,
        
    ];


    private static $has_many = [
        'FineSleeps' => FineSleep::class,
        'EagerHills' => EagerHill::class,
        
    ];



    private static $belongs_many_many = [
        'HighpitchedCommitteeYard' => HighpitchedCommitteeYard::class,
        
    ];


    private static $table_name = 'SmellySmokeCast';

}