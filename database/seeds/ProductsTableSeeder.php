<?php

use App\Entity\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert Products.
        foreach ($this->getProducts() as $product) {
            Product::create($product);
        }

        // Insert related categories and products.
        foreach ($this->getRelatedCategoriesAndProducts() as $relatedCatProds) {
            DB::table('categories_products')->insert([
                'category_id' => $relatedCatProds[0],
                'product_id'  => $relatedCatProds[1],
                'created_at'  => \Carbon\Carbon::now(),
                'updated_at'  => \Carbon\Carbon::now(),
            ]);
        }
    }

    public function getProducts()
    {
        return [
            [ // 1
                'name'        => 'Bernese Mountain',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Bernese Mountain'),
            ],
            [ // 2
                'name'        => 'Beneful',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/food/beneful.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Beneful'),
            ],
            [ // 3
                'name'        => 'Authority',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/food/dog-food.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Authority'),
            ],
            [ // 4
                'name'        => 'Whole-earth',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/food/dog-food-1.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Whole-earth'),
            ],
            [ // 5 <-
                'name'        => 'Chihuahua',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/dog-1.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Chihuahua'),
            ],
            [ // 6
                'name'        => 'French bulldog',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/dog-2.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Bulldog'),
            ],
            [ // 7
                'name'        => 'Pug Puppy',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/dog-4.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Pug'),
            ],
            [ // 8
                'name'        => 'Golden retriever',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/dog-5.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Retriever'),
            ],
            [ // 9
                'name'        => 'Maltese',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/dog-6.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Maltese'),
            ],
            [ // 10
                'name'        => 'Puppy',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/dog-7.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Puppy'),
            ],
            [ // 11
                'name'        => 'Puppy',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/dog-8.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Puppy'),
            ],
            [ // 12
                'name'        => 'Yorkshire',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/dog-9.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Yorkshire'),
            ],
            [ // 13
                'name'        => 'Pedigree',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/food/dog-food-2.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Pedigree'),
            ],
            [ // 14
                'name'        => 'KibblesBites',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/food/kiblebites.jpg',
                'slug'        => \Illuminate\Support\Str::slug('KibblesBites'),
            ],
            [ // 15
                'name'        => 'Pedigree',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/food/pedigree.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Pedigree'),
            ],
            [ // 16
                'name'        => 'Pure',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/food/pure.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Pure'),
            ],
            [ // 17
                'name'        => 'RoyalCanin',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/food/royalcanin.jpg',
                'slug'        => \Illuminate\Support\Str::slug('RoyalCanin'),
            ],
            [ // 18
                'name'        => 'Collar',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/access/download.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Collar'),
            ],
            [ // 19
                'name'        => 'Collar',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/access/images1.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Collar'),
            ],
            [ // 20
                'name'        => 'Leash',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/access/images2.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Leash'),
            ],
            [ // 21
                'name'        => 'Leash',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/access/images3.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Leash'),
            ],
            [ // 22
                'name'        => 'Air Box Cage',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/access/images4.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Air Box Cage'),
            ],
            [ // 23
                'name'        => 'Collar',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/access/images5.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Collar'),
            ],
            [ // 24
                'name'        => 'Leash',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/access/images6.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Leash'),
            ],
            [ // 25
                'name'        => 'Collar',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/access/images.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Collar'),
            ],
            [ // 26
                'name'        => 'Bengal',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/bengal.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Bengal'),
            ],
            [ // 27
                'name'        => 'Bengal',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/bengal2.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Bengal'),
            ],
            [ // 28
                'name'        => 'Bengal',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/bengal3.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Bengal'),
            ],
            [ // 29
                'name'        => 'British shorthair',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/british_shorthair.jpg',
                'slug'        => \Illuminate\Support\Str::slug('British shorthair'),
            ],
            [ // 30
                'name'        => 'British shorthair',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/british-shorthair2.jpg',
                'slug'        => \Illuminate\Support\Str::slug('British shorthair'),
            ],
            [ // 31
                'name'        => 'Mainecoon',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/mainecoon.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Mainecoon'),
            ],
            [ // 32
                'name'        => 'Mainecoon',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/mainecoon2.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Mainecoon'),
            ],
            [ // 33
                'name'        => 'Persian',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/persian.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Persian'),
            ],
            [ // 34
                'name'        => 'Siamese',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/siamese.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Siamese'),
            ],
            [ // 35
                'name'        => 'Friskies',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/food/friskies.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Friskies'),
            ],
            [ // 36
                'name'        => 'Meowmix',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/food/meawmix.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Meowmix'),
            ],
            [ // 37
                'name'        => 'Natural choice',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/food/naturalchooce.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Natural choice'),
            ],
            [ // 38
                'name'        => 'Proplan',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/food/proplane.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Proplan'),
            ],
            [ // 39
                'name'        => 'Select',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/food/select.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Select'),
            ],
            [ // 40
                'name'        => 'Whiskas',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/food/whiskas.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Whiskas'),
            ],
            [ // 41
                'name'        => 'Whiskas',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/food/whiskass.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Whiskas'),
            ],
            [ // 42
                'name'        => 'Whiskas',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/food/whiskat.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Whiskas'),
            ],
            [ // 43
                'name'        => 'Sleeping bed',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/access/download1.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Sleeping bed'),
            ],
            [ // 44
                'name'        => 'Cat cage',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/access/download.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Cat cage'),
            ],
            [ // 45
                'name'        => 'Cat bed',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/access/images1.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Cat bed'),
            ],
            [ // 46
                'name'        => 'Cat bed',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/access/images2.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Cat bed'),
            ],
            [ // 47
                'name'        => 'Cat toy',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/access/images.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Cat toy'),
            ],
            [ // 48
                'name'        => 'Gold fish',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/fish/goldfish.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Gold fish'),
            ],
            [ // 49
                'name'        => 'Gold fish',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/fish/goldfish2.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Gold fish'),
            ],
            [ // 50
                'name'        => 'Gold fish',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/fish/goldfish3.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Gold fish'),
            ],
            [ // 51
                'name'        => 'Ryukin',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/fish/ryukin.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Ryukin'),
            ],
            [ // 52
                'name'        => 'Ryukin',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/fish/ryukin2.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Ryukin'),
            ],
            [ // 53
                'name'        => 'Optimum',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/fish/food/optimum.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Optimum'),
            ],
            [ // 54
                'name'        => 'Shrimp',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/fish/food/shrimp.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Shrimp'),
            ],
            [ // 55
                'name'        => 'Eagle',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/bird/egaljpg.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Eagle'),
            ],
            [ // 56
                'name'        => 'Pigeon',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/bird/pigions.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Pigeon'),
            ],
            [ // 57
                'name'        => 'Bonanza',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/bird/food/bonanza.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Bonanza'),
            ],
            [ // 58
                'name'        => 'Fruit blend',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/bird/food/fruitblend.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Fruit blend'),
            ],
            [ // 58
                'name'        => 'Bird cage',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/bird/birdcageimages.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Bird cage'),
            ],




        ];
    }

    public function getRelatedCategoriesAndProducts()
    {
        return [
            [1, 1],
            [2, 1],
            [7, 2],
            [7, 3],
            [7, 4],
            [8, 2],
            [8, 3],
            [8, 4],
            [1, 5], //category id n  project id (2 posibility)
            [2, 5],

        ];
    }
}
