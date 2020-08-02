<?php





class RealHobbies extends \Page
{

    private static $db = [
        'Pull' => 'Boolean',
        
    ];


    private static $has_one = [
        'CeaselessKittens' => CeaselessKittens::class,
        
    ];



    private static $many_many = [
        'ErectAftermathJudges' => ErectAftermathJudge::class,
        
    ];



    private static $table_name = 'RealHobbies';

}