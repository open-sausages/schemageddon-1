<?php





class ReconditeYard extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Spot' => 'Text',
        'End' => 'Boolean',
        'Badge' => 'Text',
        'Bells' => 'Int',
        'Reason' => 'Varchar',
        
    ];



    private static $has_many = [
        'StormyGhostQuestions' => StormyGhostQuestion::class,
        'Duckss' => Ducks::class,
        'MomentousSheepPorters' => MomentousSheepPorter::class,
        
    ];




    private static $table_name = 'ReconditeYard';

}