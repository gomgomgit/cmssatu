<?php

use App\Model\Tag;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();

        $faker = Factory::create('id_ID');
        for ($i = 0; $i < 20; $i++) {
            Tag::create([
                'name' => $faker->unique()->word,
            ]);
        }
    }
}
