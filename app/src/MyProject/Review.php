<?php


namespace UncleCheese\MyProject\DataObjects;

use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Member;
use SilverStripe\Security\Permission;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TabSet;

class Review extends DataObject
{
    /**
     * @var array
     */
    private static $db = [
        'Content' => 'Text',
        'Rating' => 'Int',
    ];

    private static $has_one = [
        'Author' => Member::class,
        'Product' => Product::class,
    ];

    /**
     * @var array
     */
    private static $summary_fields = [

    ];

    /**
     * @var string
     */
    private static $table_name = 'Review';

    /**
     * @var string
     */
    private static $singular_name = 'Review';

    /**
     * @var string
     */
    private static $plural_name = 'Reviews';

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
        return false;
    }

}
