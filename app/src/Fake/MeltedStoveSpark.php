<?php





class MeltedStoveSpark extends \Page
{

    private static $db = [
        'Umbrella' => 'Int',
        
    ];




    private static $many_many = [
        'RebelHats' => RebelHat::class,
        'GlisteningDropRooms' => GlisteningDropRoom::class,
        
    ];



    private static $table_name = 'MeltedStoveSpark';

}