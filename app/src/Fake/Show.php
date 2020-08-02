<?php





class Show extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Question' => 'Text',
        'Division' => 'Varchar',
        'Story' => 'Int',
        'Ice' => 'Text',
        
    ];


    private static $has_one = [
        'TastyBadge' => TastyBadge::class,
        'Cakes' => Cakes::class,
        'AlikeSwing' => AlikeSwing::class,
        'HelpfulChannelBirds' => HelpfulChannelBirds::class,
        
    ];


    private static $has_many = [
        'Umbrellas' => Umbrella::class,
        'Grips' => Grip::class,
        'EfficaciousTreesHats' => EfficaciousTreesHat::class,
        
    ];



    private static $belongs_many_many = [
        'Committee' => Committee::class,
        
    ];


    private static $table_name = 'Show';

}