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
                'name'        => 'Dentastix',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog-food.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Dentastix'),
            ],
            [ // 3
                'name'        => 'Whole-earth',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog-food-1.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Whole-earth'),
            ],
            [ // 4
                'name'        => 'Pedigree',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>',
                'image_path'  => '/img/dog-food-2.jpg',
                'slug'        => \Illuminate\Support\Str::slug('Pedigree'),
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
        ];
    }
}
