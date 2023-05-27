<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Courses;

class CourseSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 10; $i++) {

            $course = new Courses;

            $course->semester = "1st";
            $course->technology = "Computer";
            $course->book_name = "Subject - 1";
            $course->save();
        }
        for ($i = 1; $i < 10; $i++) {

            $course = new Courses;

            $course->semester = "1st";
            $course->technology = "Graphic";
            $course->book_name = "Subject - 1";
            $course->save();
        }
        for ($i = 1; $i < 10; $i++) {

            $course = new Courses;

            $course->semester = "1st";
            $course->technology = "RAC";
            $course->book_name = "Subject - 1";
            $course->save();
        }
        for ($i = 1; $i < 10; $i++) {

            $course = new Courses;

            $course->semester = "1st";
            $course->technology = "Civil";
            $course->book_name = "Subject - 1";
            $course->save();
        }
        for ($i = 1; $i < 10; $i++) {

            $course = new Courses;

            $course->semester = "1st";
            $course->technology = "Electronic";
            $course->book_name = "Subject - 1";
            $course->save();
        }
        for ($i = 1; $i < 10; $i++) {

            $course = new Courses;

            $course->semester = "1st";
            $course->technology = "Electrical";
            $course->book_name = "Subject - 1";
            $course->save();
        }
        for ($i = 1; $i < 10; $i++) {

            $course = new Courses;

            $course->semester = "1st";
            $course->technology = "Architecture";
            $course->book_name = "Subject - 1";
            $course->save();
        }
        for ($i = 1; $i < 10; $i++) {

            $course = new Courses;

            $course->semester = "1st";
            $course->technology = "Mechanical";
            $course->book_name = "Subject - 1";
            $course->save();
        }







    }
}