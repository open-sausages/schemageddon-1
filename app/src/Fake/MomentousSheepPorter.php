<?php





class MomentousSheepPorter extends \Page
{

    private static $db = [
        'Wrench' => 'Boolean',
        'Door' => 'Boolean',
        'Committee' => 'Text',
        'Thing' => 'Boolean',
        'Bead' => 'Int',
        
    ];


    private static $has_one = [
        'LamentableFactWheel' => LamentableFactWheel::class,
        'ReconditeYard' => ReconditeYard::class,
        
    ];





    private static $table_name = 'MomentousSheepPorter';

}