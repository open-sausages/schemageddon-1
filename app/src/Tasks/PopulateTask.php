<?php


namespace UncleCheese\MyProject\Tasks;


use Faker\Factory;
use SilverStripe\Assets\Image;
use SilverStripe\Dev\BuildTask;
use SilverStripe\Security\Member;
use UncleCheese\MyProject\DataObjects\Category;
use UncleCheese\MyProject\DataObjects\Order;
use UncleCheese\MyProject\DataObjects\Product;
use UncleCheese\MyProject\DataObjects\Review;

class PopulateTask extends BuildTask
{
    private static $segment = 'populate-task';

    public function run($request)
    {
        foreach (Product::get() as $p) {
            $p->publishRecursive();
        }
        die();
        $faker = Factory::create();

        foreach (\Page::get() as $p) {
            $p->FeaturedProductID = Product::get()->sort('RAND()')->first()->ID;
            $p->Subheading = $faker->realText(160);
            $p->write();
            $p->publishRecursive();
            echo "Added featured product {$p->FeaturedProductID} to page\n";
        }

        for ($i = 0; $i < 100; $i++) {
            $o = Order::create([
                'CustomerName' => $faker->name,
                'CustomerEmail' => $faker->email,
                'Total' => $faker->randomFloat(2, 20, 1000),
                'Shipped' => $faker->randomDigit % 2 === 0,
            ]);
            $o->write();

            $productIDs = Product::get()->sort('RAND()')->limit($faker->numberBetween(1, 10))->column('ID');
            $o->Products()->setByIDList($productIDs);
            echo "created order $o->ID\n";
        }
    }
        /*
        Product::get()->removeAll();
        Category::get()->removeAll();
        Review::get()->removeAll();

        for ($i = 0; $i < 10; $i++) {
            $category = Category::create([
                'Title' => ucfirst($faker->bs),
                'IsOnHomePage' => $faker->randomDigit % 2 === 0,
                'ImageID' => Image::get()->sort('RAND()')->first()->ID,
            ]);
            $category->write();
            $category->publishRecursive();

            echo "Published category {$category->Title}\n";
        }
        for ($i = 0; $i < 50; $i++) {
            $category = Category::create([
                'Title' => ucfirst($faker->bs),
                'IsOnHomePage' => $faker->randomDigit % 2 === 0,
                'ImageID' => Image::get()->sort('RAND()')->first()->ID,
                'ParentID' => Category::get()->filter('ParentID', 0)->sort('RAND()')
                    ->first()->ID,
            ]);
            $category->write();
            $category->publishRecursive();

            echo "Published category {$category->Title}\n";
        }

        for ($i = 0; $i < 100; $i++) {
            $product = Product::create([
                'Title' => $faker->catchPhrase,
                'Description' => $faker->text,
                'Price' => $faker->randomFloat(2),
                'OnSale' => $faker->randomDigit % 2 === 0,
                'InStock' => $faker->randomDigit % 2 === 0,
                'FeaturedImageID' => Image::get()->sort('RAND()')->first()->ID,
                'PrimaryCategoryID' => Category::get()->sort('RAND()')->first()->ID,
            ]);
            $product->write();
            // Add categories

            $catIDs = Category::get()->sort('RAND()')->limit($faker->numberBetween(1, 5))->column('ID');
            $product->Categories()->setByIDList($catIDs);

            $imageIDs = Image::get()->sort('RAND()')->limit($faker->numberBetween(3, 8))->column('ID');
            $product->GalleryImages()->setByIDList($imageIDs);

            // Add reviews
            for($j = 0; $j < $faker->numberBetween(0, 5); $j++) {
                $r = Review::create([
                    'Content' => $faker->realText(),
                    'Rating' => $faker->numberBetween(1, 5),
                    'Author' => Member::get()->sort('RAND()')->first()->ID,
                    'ProductID' => $product->ID,
                ]);
                $r->write();
            }

            $product->publishRecursive();

            echo "Published product {$product->Title}\n";
        }

        // Add similar products
        foreach (Product::get() as $product) {
            $similar = Product::get()->exclude('ID', $product->ID)
                ->limit($faker->numberBetween(0, 5))->sort('RAND()')->column('ID');
            $product->SimilarProducts()->setByIDList($similar);
            echo "Added similar products to $product->Title\n";
        }

        echo "Done\n";
    }
        */
}
