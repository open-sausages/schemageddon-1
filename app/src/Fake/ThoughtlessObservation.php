<?php





class ThoughtlessObservation extends AttractiveQuietHospital
{

    private static $db = [
        'Pencil' => 'Boolean',
        
    ];





    private static $belongs_many_many = [
        'Drop' => Drop::class,
        
    ];


    private static $table_name = 'ThoughtlessObservation';

}