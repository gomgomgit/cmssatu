<?php

use App\Model\Article;
use App\Model\Category;
use App\Model\Tag;
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
        // DB::table('article_tag')->truncate();

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
            $articleId = DB::table('articles')->insertGetId([
                'title' => $i . $title,
                'category_id' => $faker->randomElement($category),
                'content' => '<p>' . $faker->text(330) . '</p>',
                'user_id' => rand(1, 3),
                'slug' => Str::of($title)->slug('-'),
                'image' => 'default.jpg',
                'counter' => rand(0, 5),
                'created_at' => $now->subMinutes($i),
            ]);

            $article = Article::find($articleId);
            $tagsId = Tag::pluck('id')->toArray();
            $tags = array_rand($tagsId, 5);
            $article->tags()->sync($tags);

        }
    }
}
