<?php





class UnadvisedWine extends \Page
{

    private static $db = [
        'Stove' => 'Varchar',
        'Ghost' => 'Boolean',
        'Bulb' => 'Int',
        'Sea' => 'Boolean',
        
    ];


    private static $has_one = [
        'Yard' => Yard::class,
        'PumpedCarsTiger' => PumpedCarsTiger::class,
        
    ];





    private static $table_name = 'UnadvisedWine';

}