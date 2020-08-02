<?php





class Bells extends Sheep
{

    private static $db = [
        'Pencil' => 'Text',
        'Pleasure' => 'Varchar',
        'Office' => 'Varchar',
        'Boot' => 'Int',
        
    ];



    private static $has_many = [
        'Badges' => Badge::class,
        'AlikeSwings' => AlikeSwing::class,
        'StormyAttackFriends' => StormyAttackFriend::class,
        
    ];



    private static $belongs_many_many = [
        'TastyBadge' => TastyBadge::class,
        
    ];


    private static $table_name = 'Bells';

}