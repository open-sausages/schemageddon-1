<?php





class Chickens extends \Page
{

    private static $db = [
        'Airplane' => 'Int',
        'Month' => 'Boolean',
        'Agreement' => 'Boolean',
        'Bells' => 'Int',
        'Rabbits' => 'Varchar',
        
    ];


    private static $has_one = [
        'HelpfulAgreement' => HelpfulAgreement::class,
        'FarflungChickensLegs' => FarflungChickensLegs::class,
        
    ];


    private static $has_many = [
        'Bridges' => Bridge::class,
        'LamentableWriterMoves' => LamentableWriterMove::class,
        
    ];




    private static $table_name = 'Chickens';

}