<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for ($i = 0; $i < 10; $i++) {
        $new_post = new Post();

        $new_post->title = $faker->sentence(rand(2,6));
        $new_post->topic = $faker->word();
        $new_post->author = $faker->word();
        $new_post->date = $faker->dateTime();
        $new_post->description = $faker->paragraph();
        
        $slug = Str::slug($new_post->title, '-');
        $new_post->$slug = $slug;

        $new_post->save();
       }

    
    }
}
