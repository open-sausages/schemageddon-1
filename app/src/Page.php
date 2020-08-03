<?php

namespace {

    use SilverStripe\Assets\File;
    use SilverStripe\CMS\Model\SiteTree;
    use UncleCheese\MyProject\DataObjects\Product;

    class Page extends SiteTree
    {
        private static $db = [
            'Subheading' => 'Varchar',
        ];

        private static $has_one = [
            'FeaturedProduct' => Product::class,
        ];

        private static $many_many = [
            'Files' => File::class,
        ];

        public function canView($member = null)
        {
            return true;
            //return $this->ID % 2 != 0;
        }
    }


}
