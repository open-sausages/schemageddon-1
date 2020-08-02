<?php





class ReconditeVolleyballMitten extends CapriciousTitle
{

    private static $db = [
        'Story' => 'Boolean',
        'Straw' => 'Boolean',
        'War' => 'Int',
        'Bead' => 'Int',
        'Temper' => 'Boolean',
        
    ];





    private static $belongs_many_many = [
        'DisturbedShow' => DisturbedShow::class,
        'ProfuseFairies' => ProfuseFairies::class,
        
    ];


    private static $table_name = 'ReconditeVolleyballMitten';

}