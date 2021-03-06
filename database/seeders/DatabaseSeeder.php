<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SettingTableSeeder::class);
         \App\Models\User::factory(50)->create();
        //  \App\Models\Category::factory(20)->create();
        //  \App\Models\Brand::factory(30)->create();
        //  \App\Models\Product::factory(50)->create();
        //  \App\Models\ProductReview::factory(100)->create();
    }

}
