<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teachers;
use Faker\Factory as Faker;

class TeacherSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i < 40; $i++) {


            $teacher = new Teachers;

            $teacher->w_type = "1";
            $teacher->user_id = $faker->randomNumber(6, true);
            $teacher->technology = $faker->randomElement(['Computer', 'Graphic', 'Civil', 'RAC', 'Electronic', 'Electrical', 'Architecture', 'Mechanical', 'Others']);
            $teacher->user_name = $faker->name;
            $teacher->position = $faker->randomElement(['CI', 'JR Instructor', 'Accountants', 'Others']);
            $teacher->mobile_number = $faker->numerify('01###-######');
            $teacher->email = $faker->email;
            $teacher->inserter_id = "100001";
            $teacher->save();


        }
    }
}