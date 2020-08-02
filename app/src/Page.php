<?php

namespace {

    use SilverStripe\Assets\File;
    use SilverStripe\CMS\Model\SiteTree;

    class Page extends SiteTree
    {
        private static $db = [];

        private static $has_one = [];

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
