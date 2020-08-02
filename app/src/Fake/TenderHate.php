<?php





class TenderHate extends \Page
{

    private static $db = [
        'Coast' => 'Int',
        'Soda' => 'Varchar',
        'Airplane' => 'Boolean',
        'Place' => 'Text',
        'Hospital' => 'Boolean',
        
    ];


    private static $has_one = [
        'Straw' => Straw::class,
        'ShortScarfPoint' => ShortScarfPoint::class,
        
    ];





    private static $table_name = 'TenderHate';

}