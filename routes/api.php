<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\TeacherController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\DepositController;
use App\Http\Controllers\Api\ResultController;
use App\Http\Controllers\Api\NoticeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('api-v1')->group(function () {


    // Student Section
    Route::get('all_students', [StudentController::class, 'all_students']);

    Route::get('student/user_id/{user_id}', [StudentController::class, 'student_user_id']);

    Route::get('student/technology/{technology}', [StudentController::class, 'student_technology']);

    Route::get('student/tech_sem/{technology}/{semester}', [StudentController::class, 'student_tech_sem']);



    // Teacher Section

    Route::get('all_teachers', [TeacherController::class, 'all_teachers']);

    Route::get('teacher/user_id/{user_id}', [TeacherController::class, 'teacher_user_id']);

    Route::get('teacher/technology/{technology}', [TeacherController::class, 'teacher_technology']);



    // Course Section

    Route::get('course/tech_sem/{technology}/{semester}', [CourseController::class, 'course_tech_sem']);


    // Deposit Section

    Route::get('deposit/list/user_id/{user_id}', [DepositController::class, 'deposit_user_id']);



    // Result Section

    Route::get('result/list/user_id/{user_id}', [ResultController::class, 'result_user_id']);

    Route::get('result/tech_sem_sub/{technology}/{semester}/{subject}', [ResultController::class, 'result_tech_sem_sub']);




    // Notice Section

    Route::get('notices/{status}', [NoticeController::class, 'notices']);












});