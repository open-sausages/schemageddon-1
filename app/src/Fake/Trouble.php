<?php





class Trouble extends \Page
{

    private static $db = [
        'Effect' => 'Text',
        'Scarf' => 'Text',
        
    ];





    private static $belongs_many_many = [
        'HistoricalSlip' => HistoricalSlip::class,
        'ThoughtlessEnd' => ThoughtlessEnd::class,
        
    ];


    private static $table_name = 'Trouble';

}