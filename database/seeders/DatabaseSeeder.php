<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Type;
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
        //\DB::statement("TRUNCATE TABLE category_product");
        //\DB::statement("TRUNCATE TABLE products");
//         \App\Models\User::factory(10)->create();
        //\App\Models\Brand::factory(10)->create();
        \App\Models\Product::factory(20)->create();
        //\App\Models\Category::factory(10)->create();
//        \App\Models\Type::factory(10)->create();
//        \App\Models\Job::factory(50)->create();
    }
}
