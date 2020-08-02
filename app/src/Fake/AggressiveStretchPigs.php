<?php





class AggressiveStretchPigs extends CuriousSparkThread
{

    private static $db = [
        'Cap' => 'Text',
        'Umbrella' => 'Boolean',
        
    ];


    private static $has_one = [
        'Straw' => Straw::class,
        
    ];





    private static $table_name = 'AggressiveStretchPigs';

}