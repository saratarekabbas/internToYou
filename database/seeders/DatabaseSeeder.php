<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::truncate(); //deletes all the existing data
        Category::truncate();
        Job::truncate();

        //factory created
//        User::factory(3)->create();

        //specialized creation
        Category::create([
            'name' => 'Information Technology',
            'slug' => 'information-technology'
        ]);

        Category::create([
            'name' => 'Accounting',
            'slug' => 'accounting'
        ]);

        Category::create([
            'name' => 'Business',
            'slug' => 'business'
        ]);
    }
}
