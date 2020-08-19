<?php

use App\Model\Article;
use App\Model\Category;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            $title = $faker->sentence($nbWords = 4, true);
            // Article::create([
            //     'title' => $i . $title,
            //     'category_id' => $faker->randomElement($category),
            //     'content' => '<p>' . $faker->text(330) . '</p>',
            //     'user_id' => rand(1, 3),
            //     'slug' => Str::of($title)->slug('-'),
            // ]);

            $now = Carbon::now();
            DB::table('articles')->insert([
                'title' => $i . $title,
                'category_id' => $faker->randomElement($category),
                'content' => '<p>' . $faker->text(330) . '</p>',
                'user_id' => rand(1, 3),
                'slug' => Str::of($title)->slug('-'),
                'counter' => rand(0, 5),
                'created_at' => $now->subMinutes($i),
            ]);

            DB::table('article_tag')->truncate();
        }
    }
}
