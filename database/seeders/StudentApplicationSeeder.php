<?php

namespace Database\Seeders;

use App\Models\StudentAplication;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            $studentApplication = new StudentAplication();
            $studentApplication->user_id = $i + 1;
            $studentApplication->residential_college_id = $faker->numberBetween(1, 5);
            $studentApplication->reason = $faker->paragraph;
            $studentApplication->save();
        }
    }
}
