<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Nhà đất cho thuê',
            'căn hộ cao cấp',
            'Mua bán'
        ];

        foreach ($categories as $category) {
            Category::create([
                'parent_id' => 0,
                'title' => $category,
                'meta_title' => $category,
                'position' => rand(1, 40),
                'slug' => str_slug($category),
                'status' => 1,
            ]);
        }
    }


}
