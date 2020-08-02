<?php





class WeakCoatSock extends \Page
{

    private static $db = [
        'Show' => 'Int',
        'Current' => 'Int',
        'Liquid' => 'Boolean',
        'Loss' => 'Boolean',
        
    ];


    private static $has_one = [
        'Haircut' => Haircut::class,
        'LeftLineCoat' => LeftLineCoat::class,
        'Cushion' => Cushion::class,
        'SqueamishPopcornPlayground' => SqueamishPopcornPlayground::class,
        
    ];



    private static $many_many = [
        'Coasts' => Coast::class,
        'ShortIces' => ShortIce::class,
        
    ];



    private static $table_name = 'WeakCoatSock';

}