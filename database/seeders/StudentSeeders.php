<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Faker\Factory as Faker;

class StudentSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i < 20; $i++) {


            $student = new Student;

            $student->user_id = $faker->randomNumber(4, true);
            $student->technology = $faker->randomElement(['Computer', 'Graphic', 'Civil', 'RAC', 'Electronic', 'Electrical', 'Architecture', 'Mechanical', 'Others']);
            $student->admission_year = $faker->randomElement(['2019-2020', '2020-2021', '2021-2022', '2022-2023']);
            $student->current_semester = $faker->randomElement(['1st', '2nd', '3rd', '4th', '5th', '6th', '7th', '8th', 'Others']);
            $student->user_name = $faker->name;
            $student->gender = $faker->randomElement(['Male', 'Female', 'Others']);
            $student->clg_id = $faker->numberBetween(1, 300) . "/22";
            $student->roll_no = $faker->numberBetween(1, 300);
            $student->mobile_number = $faker->numerify('01###-######');
            $student->email = $faker->email;
            $student->inserter_id = "100001";
            $student->save();


        }

    }
}