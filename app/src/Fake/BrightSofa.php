<?php





class BrightSofa extends HelpfulChannelBirds
{

    private static $db = [
        'Sleep' => 'Text',
        'Control' => 'Boolean',
        
    ];


    private static $has_one = [
        'BoundlessDoctorBead' => BoundlessDoctorBead::class,
        
    ];





    private static $table_name = 'BrightSofa';

}