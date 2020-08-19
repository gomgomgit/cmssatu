<?php

use App\Model\Category;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        $faker = Factory::create('id_ID');

        for ($i = 0; $i < 50; $i++) {
            Category::create([
                'name' => $faker->unique()->word,
            ]);
        }
    }
}
