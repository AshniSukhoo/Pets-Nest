<?php

use Illuminate\Database\Seeder;

use App\Entity\Category;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    protected $categories = [
        'Pets',//1
        'Dogs',//2
        'Cats',//3
        'Fish',//4
        'Birds',//5
        'Accessories',//6
        'Pets\' food',//7
        'Dogs\' food',//8
        'Dogs\' accessories',//9
        'Pets\' accessories', //10 <--
        'Cats\' food', //11
        'Cats\' accessories', //12
        'Fish\' food', //13
        'Fish\' accessories', //14
        'Birds\' food', //15
        'Birds\' accessories', //16


    ];

    protected $relatedCategories = [
        [2, 8],
        [8, 2],
        [2, 9],
        [9, 2],
        [8, 9],
        [9, 8],
        [11, 3], //<--
        [3, 11],
        [12, 3],
        [3, 12],
        [13, 4],
        [4, 13],
        [14, 4],
        [4, 14],
        [15, 5],
        [5, 15],
        [16, 5],
        [5, 16],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => \Illuminate\Support\Str::slug($category),
            ]);
        }

        // Insert Related categories.
        foreach ($this->relatedCategories as $relatedCat) {
            DB::table('related_categories')->insert([
                'category_id'         => $relatedCat[0],
                'related_category_id' => $relatedCat[1],
                'created_at'          => \Carbon\Carbon::now(),
                'updated_at'          => \Carbon\Carbon::now(),
            ]);
        }
    }
}
