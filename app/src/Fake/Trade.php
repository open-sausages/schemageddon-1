<?php





class Trade extends BrightSofa
{

    private static $db = [
        'Watch' => 'Int',
        
    ];



    private static $has_many = [
        'Advertisements' => Advertisement::class,
        
    ];




    private static $table_name = 'Trade';

}