<?php





class AbrasiveExchangeShade extends \Page
{

    private static $db = [
        'Brother' => 'Boolean',
        'Airplane' => 'Boolean',

    ];



    private static $has_many = [
        'FineBaskets' => FineBasket::class,
        'ProfuseFairiess' => ProfuseFairies::class,

    ];




    private static $table_name = 'AbrasiveExchangeShade';

    public function canCreate($member = null, $context = [])
    {
        return true;
    }

    public function canEdit($member = null)
    {
        return true;
    }


}
