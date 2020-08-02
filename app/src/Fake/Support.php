<?php





class Support extends CapriciousTitle
{

    private static $db = [
        'Move' => 'Boolean',
        'Ducks' => 'Boolean',
        'Sock' => 'Text',
        'Chickens' => 'Text',
        'Road' => 'Boolean',
        
    ];


    private static $has_one = [
        'Spot' => Spot::class,
        
    ];





    private static $table_name = 'Support';

}