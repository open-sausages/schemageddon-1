<?php


namespace UncleCheese\MyProject\DataObjects;

use SilverStripe\Assets\Image;
use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Permission;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TabSet;

class Category extends DataObject
{
    /**
     * @var array
     */
    private static $db = [
        'Title' => 'Varchar',
        'IsOnHomePage' => 'Boolean',
    ];

    private static $belongs_many_many = [
        'Products' => Product::class,
    ];

    private static $has_many = [
        'Children' => Category::class,
    ];

    private static $has_one = [
        'Image' => Image::class,
        'Parent' => Category::class,
    ];

    /**
     * @var array
     */
    private static $summary_fields = [

    ];

    /**
     * @var string
     */
    private static $table_name = 'Category';

    /**
     * @var string
     */
    private static $singular_name = 'Category';

    /**
     * @var string
     */
    private static $plural_name = 'Categorys';

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
