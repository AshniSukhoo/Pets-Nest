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
                'price'       =>  '500',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Bernese Mountain'),
            ],
            [ // 2
                'name'        => 'Beneful',
                'price'       =>  '200',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/food/beneful.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Beneful'),
            ],
            [ // 3
                'name'        => 'Authority',
                'price'       =>  '245',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/food/dog-food.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Authority'),
            ],
            [ // 4
                'name'        => 'Whole-earth',
                'price'       =>  '222',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/food/dog-food-1.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Whole-earth'),
            ],
            [ // 5 <-
                'name'        => 'Chihuahua',
                'price'       =>  '250',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/dog-1.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Chihuahua'),
            ],
            [ // 6
                'name'        => 'French bulldog',
                'price'       =>  '300',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/dog-2.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Bulldog'),
            ],
            [ // 7
                'name'        => 'Pug Puppy',
                'price'       =>  '250',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/dog-4.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Pug'),
            ],
            [ // 8
                'name'        => 'Golden retriever',
                'price'       =>  '400',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/dog-5.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Retriever'),
            ],
            [ // 9
                'name'        => 'Maltese',
                'price'       =>  '350',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/dog-6.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Maltese'),
            ],
            [ // 10
                'name'        => 'Puppy',
                'price'       =>  '250',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/dog-7.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Puppy1'),
            ],
            [ // 11
                'name'        => 'Puppy',
                'price'       =>  '250',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/dog-8.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Puppy2'),
            ],
            [ // 12
                'name'        => 'Yorkshire',
                'price'       =>  '300',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/dog-9.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Yorkshire'),
            ],
            [ // 13
                'name'        => 'Pedigree',
                'price'       =>  '150',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/food/dog-food-2.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Pedigree1'),
            ],
            [ // 14
                'name'        => 'KibblesBites',
                'price'       =>  '100',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/food/kiblebites.jpg',
                'slug'        => \Illuminate\Support\Str::slug('KibblesBites'),
            ],
            [ // 15
                'name'        => 'Pedigree',
                'price'       =>  '125',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/food/pedigree.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Pedigree2'),
            ],
            [ // 16
                'name'        => 'Pure',
                'price'       =>  '234',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/food/pure.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Pure'),
            ],
            [ // 17
                'name'        => 'RoyalCanin',
                'price'       =>  '200',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/food/royalcanin.jpg',
                'slug'        => \Illuminate\Support\Str::slug('RoyalCanin'),
            ],
            [ // 18
                'name'        => 'Collar',
                'price'       =>  '59',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/access/download.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Collar1'),
            ],
            [ // 19
                'name'        => 'Collar',
                'price'       =>  '50',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/access/images1.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Collar2'),
            ],
            [ // 20
                'name'        => 'Leash',
                'price'       =>  '100',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/access/images2.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Leash1'),
            ],
            [ // 21
                'name'        => 'Leash',
                'price'       =>  '70',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/access/images3.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Leash2'),
            ],
            [ // 22
                'name'        => 'Air Box Cage',
                'price'       =>  '190',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/access/images4.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Air Box Cage'),
            ],
            [ // 23
                'name'        => 'Collar',
                'price'       =>  '205',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/access/images5.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Collar3'),
            ],
            [ // 24
                'name'        => 'Leash',
                'price'       =>  '235',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/access/images6.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Leash3'),
            ],
            [ // 25
                'name'        => 'Collar',
                'price'       =>  '235',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog/access/images.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Collar4'),
            ],
            [ // 26
                'name'        => 'Bengal',
                'price'       =>  '200',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/bengal.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Bengal1'),
            ],
            [ // 27
                'name'        => 'Bengal',
                'price'       =>  '200',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/bengal2.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Bengal2'),
            ],
            [ // 28
                'name'        => 'Bengal',
                'price'       =>  '200',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/bengal3.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Bengal3'),
            ],
            [ // 29
                'name'        => 'British shorthair',
                'price'       =>  '125',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/british_shorthair.jpg',
                'slug'        => \Illuminate\Support\Str::slug('British shorthair1'),
            ],
            [ // 30
                'name'        => 'British shorthair',
                'price'       =>  '230',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/british-shorthair2.jpg',
                'slug'        => \Illuminate\Support\Str::slug('British shorthair2'),
            ],
            [ // 31
                'name'        => 'Mainecoon',
                'price'       =>  '200',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/mainecoon.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Mainecoon1'),
            ],
            [ // 32
                'name'        => 'Mainecoon',
                'price'       =>  '200',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/mainecoon2.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Mainecoon2'),
            ],
            [ // 33
                'name'        => 'Persian',
                'price'       =>  '400',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/persian.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Persian1'),
            ],
            [ // 34
                'name'        => 'Siamese',
                'price'       =>  '200',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/siamese.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Siamese'),
            ],
            [ // 35
                'name'        => 'Friskies',
                'price'       =>  '50',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/food/friskies.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Friskies'),
            ],
            [ // 36
                'name'        => 'Meowmix',
                'price'       =>  '60',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/food/meawmix.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Meowmix'),
            ],
            [ // 37
                'name'        => 'Natural choice',
                'price'       =>  '70',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/food/naturalchooce.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Natural choice'),
            ],
            [ // 38
                'name'        => 'Proplan',
                'price'       =>  '50',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/food/proplane.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Proplan'),
            ],
            [ // 39
                'name'        => 'Select',
                'price'       =>  '59',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/food/select.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Select'),
            ],
            [ // 40
                'name'        => 'Whiskas',
                'price'       =>  '123',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/food/whiskas.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Whiskas1'),
            ],
            [ // 41
                'name'        => 'Whiskas',
                'price'       =>  '126',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/food/whiskass.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Whiskas2'),
            ],
            [ // 42
                'name'        => 'Whiskas',
                'price'       =>  '178',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/food/whiskat.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Whiskas3'),
            ],
            [ // 43
                'name'        => 'Sleeping bed',
                'price'       =>  '200',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/access/download1.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Sleeping bed'),
            ],
            [ // 44
                'name'        => 'Cat cage',
                'price'       =>  '289',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/access/download.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Cat cage'),
            ],
            [ // 45
                'name'        => 'Cat bed',
                'price'       =>  '200',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/access/images1.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Cat bed1'),
            ],
            [ // 46
                'name'        => 'Cat bed',
                'price'       =>  '230',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/access/images2.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Cat bed2'),
            ],
            [ // 47
                'name'        => 'Cat toy',
                'price'       =>  '50',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/cat/access/images.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Cat toy'),
            ],
            [ // 48
                'name'        => 'Gold fish',
                'price'       =>  '20',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/fish/goldfish.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Gold fish1'),
            ],
            [ // 49
                'name'        => 'Gold fish',
                'price'       =>  '50',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/fish/goldfish2.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Gold fish2'),
            ],
            [ // 50
                'name'        => 'Gold fish',
                'price'       =>  '39',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/fish/goldfish3.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Gold fish3'),
            ],
            [ // 51
                'name'        => 'Ryukin',
                'price'       =>  '30',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/fish/ryukin.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Ryukin1'),
            ],
            [ // 52
                'name'        => 'Ryukin',
                'price'       =>  '40',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/fish/ryukin2.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Ryukin2'),
            ],
            [ // 53
                'name'        => 'Optimum',
                'price'       =>  '20',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/fish/food/optimum.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Optimum'),
            ],
            [ // 54
                'name'        => 'Shrimp',
                'price'       =>  '29',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/fish/food/shrimp.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Shrimp'),
            ],
            [ // 55
                'name'        => 'Eagle',
                'price'       =>  '300',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/bird/egaljpg.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Eagle'),
            ],
            [ // 56
                'name'        => 'Pigeon',
                'price'       =>  '250',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/bird/pigions.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Pigeon'),
            ],
            [ // 57
                'name'        => 'Bonanza',
                'price'       =>  '20',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/bird/food/bonanza.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Bonanza'),
            ],
            [ // 58
                'name'        => 'Fruit blend',
                'price'       =>  '25',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/bird/food/fruitblend.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Fruit blend'),
            ],
            [ // 59
                'name'        => 'Bird cage',
                'price'       =>  '100',
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
