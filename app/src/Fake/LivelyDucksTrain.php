<?php





class LivelyDucksTrain extends LamentableWriterMove
{

    private static $db = [
        'Theory' => 'Boolean',
        'Sofa' => 'Boolean',
        
    ];


    private static $has_one = [
        'Soap' => Soap::class,
        'WoodenTheoryScarf' => WoodenTheoryScarf::class,
        'PoisedFruitAgreement' => PoisedFruitAgreement::class,
        
    ];




    private static $belongs_many_many = [
        'Committee' => Committee::class,
        
    ];


    private static $table_name = 'LivelyDucksTrain';

}