<?php





class SqueamishPopcornPlayground extends \Page
{

    private static $db = [
        'Tendency' => 'Varchar',
        'Trouble' => 'Boolean',
        
    ];


    private static $has_one = [
        'ShortIce' => ShortIce::class,
        'WindyJudge' => WindyJudge::class,
        'Yard' => Yard::class,
        
    ];


    private static $has_many = [
        'Haircuts' => Haircut::class,
        'ShockingFears' => ShockingFear::class,
        'WeakCoatSocks' => WeakCoatSock::class,
        
    ];




    private static $table_name = 'SqueamishPopcornPlayground';

}