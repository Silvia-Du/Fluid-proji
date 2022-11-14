<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i=0; $i< 15; $i++ ) {
            $new_post = new Post();
            $new_post->title = $faker->sentence(4);
            $new_post->slug = Post::slugGenerator($new_post->title);
            $new_post->content = $faker->text(500);
            $new_post->views = $faker->numberBetween(100, 500);
            $new_post->likes = $faker->numberBetween(50, 200);
            $new_post->reading_time = $faker->numberBetween(5, 15);
            $new_post->author = $faker->lastName();
            $new_post->save();

        }
    }
}
