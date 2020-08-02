<?php





class Advertisement extends \Page
{

    private static $db = [
        'Porter' => 'Int',
        'Division' => 'Int',
        
    ];


    private static $has_one = [
        'MightyTrainDoor' => MightyTrainDoor::class,
        'CutShade' => CutShade::class,
        'ProfuseFairies' => ProfuseFairies::class,
        'FierceWool' => FierceWool::class,
        'BrightSofa' => BrightSofa::class,
        'Trade' => Trade::class,
        'GlisteningDropRoom' => GlisteningDropRoom::class,
        
    ];





    private static $table_name = 'Advertisement';

}