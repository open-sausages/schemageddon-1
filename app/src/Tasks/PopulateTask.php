<?php


namespace UncleCheese\MyProject\Tasks;


use Faker\Factory;
use SilverStripe\Assets\Image;
use SilverStripe\Core\Config\Config;
use SilverStripe\Dev\BuildTask;
use SilverStripe\ORM\DataList;
use SilverStripe\Security\Member;
use SilverStripe\Versioned\Versioned;
use UncleCheese\MyProject\DataObjects\Category;
use UncleCheese\MyProject\DataObjects\Order;
use UncleCheese\MyProject\DataObjects\Product;
use UncleCheese\MyProject\DataObjects\Review;

class PopulateTask extends BuildTask
{
    private static $segment = 'populate-task';

    public function run($request)
    {
        $faker = Factory::create();

//        for ($i = 1; $i < 50; $i++) {
//            $cls = 'MyProject\\Fake\\DataObject' . $i;
//            echo "--- $cls ---\n";
//            DataList::create($cls)->removeAll();
//            $ct = $faker->numberBetween(5, 50);
//            for ($j = 0; $j < $ct; $j++) {
//                $obj = $cls::create();
//                $obj->Field1 = $faker->text;
//                $obj->Field2 = $faker->text;
//                $obj->Field3 = $faker->randomDigit;
//                $obj->Field4 = $faker->boolean;
//                $obj->Field5 = $faker->randomFloat(2);
//                $obj->Field6 = $faker->text;
//                $obj->Field7 = $faker->text;
//                $obj->Field8 = $faker->randomDigit;
//                $obj->Field9 = $faker->boolean;
//                $obj->Field10 = $faker->randomFloat(2);
//                $obj->Field11 = $faker->text;
//                $obj->Field12 = $faker->text;
//                $obj->Field13 = $faker->randomDigit;
//                $obj->Field14 = $faker->boolean;
//                $obj->Field15 = $faker->randomFloat(2);
//                $obj->write();
//                if ($obj->hasExtension(Versioned::class)) {
//                    $obj->publishRecursive();
//                }
//            }
//        }
//        echo "**** relations **** \n";
//        for ($i = 1; $i < 50; $i++) {
//            $cls = 'MyProject\\Fake\\DataObject' . $i;
//            echo "--- $cls ---\n";
//            foreach (DataList::create($cls) as $record) {
//                $hasOne = $record->config()->get('has_one', Config::UNINHERITED);
//                if ($hasOne) {
//                    foreach ($hasOne as $field => $class) {
//                        $random = DataList::create($class)->sort('RAND()')->first();
//                        $fieldID = $field . 'ID';
//                        $record->$fieldID = $random->ID;
//                        $record->write();
//                        if ($record->hasExtension(Versioned::class)) {
//                            $record->publishRecursive();
//                        }
//                    }
//                }
//                $mm = $record->config()->get('many_many', Config::UNINHERITED);
//                if ($mm) {
//                    foreach ($mm as $field => $class) {
//                        $randoms = DataList::create($class)->sort('RAND()')->limit($faker->numberBetween(1, 5))
//                            ->column('ID');
//
//                        $record->$field()->setByIDList($randoms);
//                        $record->write();
//                        if ($record->hasExtension(Versioned::class)) {
//                            $record->publishRecursive();
//                        }
//                    }
//                }
//            }
//        }
//    }
//        Product::get()->removeAll();
//        Category::get()->removeAll();
//        Review::get()->removeAll();
//
//        for ($i = 0; $i < 10; $i++) {
//            $category = Category::create([
//                'Title' => ucfirst($faker->bs),
//                'IsOnHomePage' => $faker->randomDigit % 2 === 0,
//                'ImageID' => Image::get()->sort('RAND()')->first()->ID,
//            ]);
//            $category->write();
//            $category->publishRecursive();
//
//            echo "Published category {$category->Title}\n";
//        }
//        for ($i = 0; $i < 50; $i++) {
//            $category = Category::create([
//                'Title' => ucfirst($faker->bs),
//                'IsOnHomePage' => $faker->randomDigit % 2 === 0,
//                'ImageID' => Image::get()->sort('RAND()')->first()->ID,
//                'ParentID' => Category::get()->filter('ParentID', 0)->sort('RAND()')
//                    ->first()->ID,
//            ]);
//            $category->write();
//            $category->publishRecursive();
//
//            echo "Published category {$category->Title}\n";
//        }
//
//        for ($i = 0; $i < 100; $i++) {
//            $product = Product::create([
//                'Title' => $faker->catchPhrase,
//                'Description' => $faker->text,
//                'Price' => $faker->randomFloat(2),
//                'OnSale' => $faker->randomDigit % 2 === 0,
//                'InStock' => $faker->randomDigit % 2 === 0,
//                'FeaturedImageID' => Image::get()->sort('RAND()')->first()->ID,
//                'PrimaryCategoryID' => Category::get()->sort('RAND()')->first()->ID,
//            ]);
//            $product->write();
//            // Add categories
//
//            $catIDs = Category::get()->sort('RAND()')->limit($faker->numberBetween(1, 5))->column('ID');
//            $product->Categories()->setByIDList($catIDs);
//
//            $imageIDs = Image::get()->sort('RAND()')->limit($faker->numberBetween(3, 8))->column('ID');
//            $product->GalleryImages()->setByIDList($imageIDs);
//
//            // Add reviews
//            for($j = 0; $j < $faker->numberBetween(0, 5); $j++) {
//                $r = Review::create([
//                    'Content' => $faker->realText(),
//                    'Rating' => $faker->numberBetween(1, 5),
//                    'Author' => Member::get()->sort('RAND()')->first()->ID,
//                    'ProductID' => $product->ID,
//                ]);
//                $r->write();
//            }
//
//            $product->publishRecursive();
//
//            echo "Published product {$product->Title}\n";
//        }
//
//        // Add similar products
//        foreach (Product::get() as $product) {
//            $similar = Product::get()->exclude('ID', $product->ID)
//                ->limit($faker->numberBetween(0, 5))->sort('RAND()')->column('ID');
//            $product->SimilarProducts()->setByIDList($similar);
//            echo "Added similar products to $product->Title\n";
//        }
//
//        echo "Done\n";
//    }
    }
}
