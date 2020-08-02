<?php





class FineBasket extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Shade' => 'Boolean',
        'Swing' => 'Boolean',
        'Grip' => 'Int',

    ];


    private static $has_one = [
        'SpicyCoast' => SpicyCoast::class,
        'ActuallyMittenActivity' => ActuallyMittenActivity::class,
        'AbsentLadybug' => AbsentLadybug::class,
        'AbrasiveExchangeShade' => AbrasiveExchangeShade::class,

    ];




    private static $belongs_many_many = [
        'WhitePleasureObservation' => WhitePleasureObservation::class,

    ];


    private static $table_name = 'FineBasket';


    public function canCreate($member = null, $context = [])
    {
        return true;
    }

    public function canEdit($member = null)
    {
        return true;
    }

}
