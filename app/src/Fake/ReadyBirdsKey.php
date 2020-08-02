<?php





class ReadyBirdsKey extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Cloth' => 'Int',
        
    ];


    private static $has_one = [
        'RebelHat' => RebelHat::class,
        'SpicyCoast' => SpicyCoast::class,
        
    ];



    private static $many_many = [
        'MindlessSmokes' => MindlessSmoke::class,
        'DispensableAftermaths' => DispensableAftermath::class,
        'AbsentLadybugs' => AbsentLadybug::class,
        
    ];


    private static $belongs_many_many = [
        'CutShade' => CutShade::class,
        
    ];


    private static $table_name = 'ReadyBirdsKey';

}