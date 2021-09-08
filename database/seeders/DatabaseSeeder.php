<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     PostSeeder::class
        // ]);
        $faker = faker::create();
        foreach(range(1,10) as $index){
            DB::table('students')->insert([
                'name' => $faker->sentence(10),
                'email' => $faker->sentence(20),
                'phone' => $faker->sentence(15)
            ]);
        }
    }
}
