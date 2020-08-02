<?php





class AmbiguousDuck extends \Page
{

    private static $db = [
        'Shade' => 'Int',
        'Road' => 'Text',
        
    ];


    private static $has_one = [
        'Drop' => Drop::class,
        'Chickens' => Chickens::class,
        'SmellySmokeCast' => SmellySmokeCast::class,
        
    ];



    private static $many_many = [
        'Casts' => Cast::class,
        
    ];



    private static $table_name = 'AmbiguousDuck';

}