<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Avventura', 'Spiagge', 'campeggio', 'amichevole', 'basso budegt', 'popolare'
        ];

        foreach($categories as $cat) {
          $new_cat = new Category();
          $new_cat->name = $cat;
          $new_cat->slug = Str::slug('-');
          $new_cat->save();
        }
    }
}
