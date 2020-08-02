<?php





class Agreement extends SilverStripe\ORM\DataObject
{

    private static $db = [
        'Station' => 'Text',
        'Soap' => 'Int',
        
    ];


    private static $has_one = [
        'WoodenBulb' => WoodenBulb::class,
        'BriefSparkHospital' => BriefSparkHospital::class,
        'SuddenIceTrade' => SuddenIceTrade::class,
        'Spot' => Spot::class,
        
    ];


    private static $has_many = [
        'Doctors' => Doctor::class,
        'HappyMoveReasons' => HappyMoveReason::class,
        
    ];




    private static $table_name = 'Agreement';

    public function canView($member = null)
    {
        return true;
    }
}