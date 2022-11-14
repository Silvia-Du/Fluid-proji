<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'Avventura', 'pace & natura', 'viaggio spirituale', 'on the road', 'famiglia', 'cool'
        ];

        foreach($tags as $tag) {
          $new_tag = new Tag();
          $new_tag->name = $tag;
          $new_tag->slug = Str::slug($tag, '-');
          $new_tag->save();

        }
    }
}
