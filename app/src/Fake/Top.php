<?php





class Top extends \Page
{

    private static $db = [
        'Pencil' => 'Varchar',
        'Flavor' => 'Varchar',
        
    ];


    private static $has_one = [
        'Trouble' => Trouble::class,
        'PanickyFairiesJudge' => PanickyFairiesJudge::class,
        
    ];





    private static $table_name = 'Top';

}