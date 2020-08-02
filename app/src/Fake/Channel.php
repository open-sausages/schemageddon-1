<?php





class Channel extends \Page
{

    private static $db = [
        'Scarf' => 'Int',
        'Thing' => 'Int',
        'Coat' => 'Varchar',
        'Swing' => 'Text',
        'Airplane' => 'Varchar',
        
    ];


    private static $has_one = [
        'Yard' => Yard::class,
        
    ];




    private static $belongs_many_many = [
        'Bridge' => Bridge::class,
        'Angle' => Angle::class,
        'HistoricalSlip' => HistoricalSlip::class,
        
    ];


    private static $table_name = 'Channel';

}