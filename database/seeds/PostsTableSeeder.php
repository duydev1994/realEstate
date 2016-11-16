<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 400; $i++) {
            $data = [
                'category_id' => $faker->numberBetween(1, 4),
                'user_id' => $faker->numberBetween(1, 2),
                'title' => $faker->title,
                'slug' => 'tuan-thai-tuan-thu-' . $i,
                'content' => $faker->text(),
                'picture_1' => $faker->imageUrl(),
                'picture_2' => $faker->imageUrl(),
                'picture_3' => $faker->imageUrl(),
                'picture_4' => $faker->imageUrl(),
                'picture_5' => $faker->imageUrl(),
                'picture_6' => $faker->imageUrl(),
                'meta_keyword' => $faker->text(),
                'meta_description' => $faker->text(),
                'meta_custom_title' => $faker->text(),
                'view_count' => rand(1, 100000),
                'money' => '1 Tỷ',
                'acreage' => rand(100, 10000) . 'm2',
                'video' => 'https://www.youtube.com/watch?v=6FMYeoQY99o',
                'country_id' => 1,
                'district_id' => 1,
                'city_id' => 1,
                'ward_id' => 1,
                'meta_robot_index' => rand(0, 1),
                'meta_robot_follow' => rand(0, 1),
                'status' => $faker->numberBetween(1, 2), // 1 => active, 2 => inactive
            ];
            \App\Models\Post::create($data);
        }
    }
}
