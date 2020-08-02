<?php





class WhiteExchange extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Suit' => 'Int',
        
    ];


    private static $has_one = [
        'Hobbies' => Hobbies::class,
        'CeaselessBoard' => CeaselessBoard::class,
        'Straw' => Straw::class,
        'WakefulRub' => WakefulRub::class,
        
    ];





    private static $table_name = 'WhiteExchange';

}