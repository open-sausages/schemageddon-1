<?php





class BumpyCave extends \Page
{

    private static $db = [
        'Cast' => 'Boolean',
        'View' => 'Varchar',
        'Airplane' => 'Text',
        
    ];



    private static $has_many = [
        'HighpitchedCommitteeYards' => HighpitchedCommitteeYard::class,
        'Things' => Thing::class,
        'Bridges' => Bridge::class,
        
    ];


    private static $many_many = [
        'Badges' => Badge::class,
        'Kittenss' => Kittens::class,
        
    ];



    private static $table_name = 'BumpyCave';

}