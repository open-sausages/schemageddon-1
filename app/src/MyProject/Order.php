<?php


namespace UncleCheese\MyProject\DataObjects;

use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Permission;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TabSet;

class Order extends DataObject
{
    /**
     * @var array
     */
    private static $db = [
        'CustomerName' => 'Varchar',
        'CustomerEmail' => 'Varchar',
        'Total' => 'Currency',
        'Shipped' => 'Boolean',
        'Status' => "Enum('FULFILLED, SHIPPED, PAID')"
    ];

    private static $many_many = [
        'Products' => Product::class,
    ];

    /**
     * @var array
     */
    private static $summary_fields = [

    ];

    /**
     * @var string
     */
    private static $table_name = 'Order';

    /**
     * @var string
     */
    private static $singular_name = 'Order';

    /**
     * @var string
     */
    private static $plural_name = 'Orders';

    /**
     * @var string
     */
    private static $default_sort = 'ID ASC';

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = FieldList::create(TabSet::create('Root'));
        $this->extend('updateCMSFields', $fields);

        return $fields;
    }

    /**
     * @param null
     * @param array
     * @return bool
     */
    public function canCreate($member = null, $context = [])
    {
        return Permission::checkMember($member, 'CMS_ACCESS_CMSMain');
    }

    /**
     * @param null
     * @param array
     * @return bool
     */
    public function canEdit($member = null, $context = [])
    {
        return Permission::checkMember($member, 'CMS_ACCESS_CMSMain');
    }

    /**
     * @param null
     * @param array
     * @return bool
     */
    public function canDelete($member = null, $context = [])
    {
        return Permission::checkMember($member, 'CMS_ACCESS_CMSMain');
    }

    /**
     * @param null
     * @param array
     * @return bool
     */
    public function canView($member = null, $context = [])
    {
        return true;
    }

}
