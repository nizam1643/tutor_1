<?php

namespace Database\Seeders;

use App\Models\StudentProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentProfileSeeder extends Seeder
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
            $studentProfile = new StudentProfile();
            $studentProfile->user_id = $i + 1;
            $studentProfile->phone_number = $faker->phoneNumber;
            $studentProfile->address = $faker->address;
            $studentProfile->date_of_birth = $faker->dateTimeBetween('-40 years', '-18 years')->format('Y-m-d');
            $studentProfile->gender = $faker->randomElement(['male', 'female']);
            $studentProfile->nationality = $faker->randomElement(['malaysian', 'foreigner']);
            $studentProfile->education_level = $faker->randomElement(['diploma', 'degree', 'master', 'phd']);
            $studentProfile->save();
        }
    }
}
