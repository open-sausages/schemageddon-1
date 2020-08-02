<?php





class EtherealPlaceRoad extends CeaselessBoard
{

    private static $db = [
        'Mitten' => 'Varchar',
        'Cushion' => 'Varchar',
        
    ];


    private static $has_one = [
        'HelpfulChannelBirds' => HelpfulChannelBirds::class,
        'MomentousSheepPorter' => MomentousSheepPorter::class,
        'WrongAftermath' => WrongAftermath::class,
        
    ];



    private static $many_many = [
        'FamiliarReligions' => FamiliarReligion::class,
        
    ];



    private static $table_name = 'EtherealPlaceRoad';

}