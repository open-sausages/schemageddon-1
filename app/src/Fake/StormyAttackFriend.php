<?php





class StormyAttackFriend extends \Page
{

    private static $db = [
        'Shade' => 'Text',
        'Judge' => 'Int',
        'Effect' => 'Boolean',
        
    ];


    private static $has_one = [
        'Bells' => Bells::class,
        
    ];





    private static $table_name = 'StormyAttackFriend';

}