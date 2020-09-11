<?php

namespace UncleCheese\MyProject\DataObjects;

use SilverStripe\Assets\Image;
use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Member;
use SilverStripe\Security\Permission;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TabSet;
use SilverStripe\Versioned\Versioned;
class SupplierProduct extends Product
{
    private static $has_one = [
        'Supplier' => Member::class
    ];
}
