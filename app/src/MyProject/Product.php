<?php


namespace UncleCheese\MyProject\DataObjects;

use SilverStripe\Assets\Image;
use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Permission;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TabSet;
use SilverStripe\Versioned\Versioned;

class Product extends DataObject
{
    /**
     * @var array
     */
    private static $db = [
        'Title' => 'Varchar',
        'Description' => 'HTMLText',
        'Price' => 'Currency',
        'OnSale' => 'Boolean',
        'InStock' => 'Int',
    ];

    private static $has_one = [
        'FeaturedImage' => Image::class,
        'PrimaryCategory' => Category::class,
    ];

    private static $has_many = [
        'Reviews' => Review::class,
    ];

    private static $many_many = [
        'GalleryImages' => Image::class,
        'Categories' => Category::class,
        'SimilarProducts' => Product::class,
    ];

    private static $extensions = [
        Versioned::class,
    ];

    /**
     * @var array
     */
    private static $summary_fields = [

    ];

    /**
     * @var string
     */
    private static $table_name = 'Product';

    /**
     * @var string
     */
    private static $singular_name = 'Product';

    /**
     * @var string
     */
    private static $plural_name = 'Products';

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
