<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {        
      User::create([
          'name' => 'Mufli Fadla',
          'username' => 'muflifadla',
          'email' => 'muflifadla@gmail.com',
          'password' => bcrypt('password')
      ]);      

      User::factory(3)->create();
      Post::factory(20)->create();
         
         Category::create([
            'name' => 'Travel & Lifestyle',
            'slug' => 'travel-lifestyle',
         ]);
         
         Category::create([
            'name' => 'Tips & Rekomendasi',
            'slug' => 'tips-rekomendasi',
         ]);
         
         Category::create([
            'name' => 'Hobi & Komunitas',
            'slug' => 'hobi-komunitas',
         ]);
    }
}
