<?php





class Haircut extends ThoughtlessEnd
{

    private static $db = [
        'Cloth' => 'Int',
        'Lock' => 'Varchar',
        'Scarf' => 'Text',
        
    ];


    private static $has_one = [
        'CuriousSparkThread' => CuriousSparkThread::class,
        'UnadvisedWine' => UnadvisedWine::class,
        'SqueamishPopcornPlayground' => SqueamishPopcornPlayground::class,
        
    ];





    private static $table_name = 'Haircut';

}