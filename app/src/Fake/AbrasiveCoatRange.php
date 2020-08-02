<?php





class AbrasiveCoatRange extends \Page
{

    private static $db = [
        'Market' => 'Int',
        'Theory' => 'Varchar',
        'Bells' => 'Boolean',

    ];





    private static $belongs_many_many = [
        'Popcorn' => Popcorn::class,

    ];


    private static $table_name = 'AbrasiveCoatRange';

    public function canCreate($member = null, $context = [])
    {
        return true;
    }

    public function canEdit($member = null)
    {
        return true;
    }

}
