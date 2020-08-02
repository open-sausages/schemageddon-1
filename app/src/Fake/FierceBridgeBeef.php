<?php





class FierceBridgeBeef extends \Page
{

    private static $db = [
        'Sign' => 'Boolean',
        'Mitten' => 'Text',
        'Stove' => 'Varchar',
        
    ];


    private static $has_one = [
        'Committee' => Committee::class,
        'UnadvisedSupportVeil' => UnadvisedSupportVeil::class,
        'HelpfulAgreement' => HelpfulAgreement::class,
        
    ];





    private static $table_name = 'FierceBridgeBeef';

}