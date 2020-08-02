<?php





class FierceWool extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Babies' => 'Varchar',
        'Exchange' => 'Boolean',
        'Activity' => 'Boolean',
        'Tiger' => 'Int',
        
    ];


    private static $has_one = [
        'UnadvisedWine' => UnadvisedWine::class,
        'HelpfulChannelBirds' => HelpfulChannelBirds::class,
        
    ];




    private static $belongs_many_many = [
        'UnadvisedSupportVeil' => UnadvisedSupportVeil::class,
        
    ];


    private static $table_name = 'FierceWool';

}