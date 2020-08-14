<?php

use App\Model\Article;
use App\Model\Category;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();

        $faker = Factory::create('id_ID');
        $category = Category::pluck('id');

        for ($i = 0; $i < 100; $i++) {
            Article::create([
                'title' => $faker->sentence($nbWords = 4, true),
                'category_id' => $faker->randomElement($category),
                'content' => '<p>' . $faker->text(330) . '</p>',
                'user_id' => rand(1, 3),
            ]);
        }
    }
}
