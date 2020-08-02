<?php





class AbsentLadybug extends \Page
{

    private static $db = [
        'Ghost' => 'Int',
        'Pleasure' => 'Boolean',
        'Cave' => 'Int',
        'Sea' => 'Int',
        'Haircut' => 'Boolean',
        
    ];


    private static $has_one = [
        'PoisedFruitAgreement' => PoisedFruitAgreement::class,
        
    ];



    private static $many_many = [
        'UppityVests' => UppityVest::class,
        
    ];


    private static $belongs_many_many = [
        'ReadyBirdsKey' => ReadyBirdsKey::class,
        
    ];


    private static $table_name = 'AbsentLadybug';

}