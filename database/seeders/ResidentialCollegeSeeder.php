<?php

namespace Database\Seeders;

use App\Models\ResidentialCollege;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ResidentialCollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            $studentProfile = new ResidentialCollege();
            $studentProfile->name = 'Residential College '. $i + 1;
            $studentProfile->save();
        }
    }
}
