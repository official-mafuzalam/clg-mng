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

    Route::post('student/add', [StudentController::class, 'student_add']);

    Route::get('student/add/{user_id}/{technology}/{admission_year}/{current_semester}/{clg_id}/{roll_no}/{student_name}/{student_nid}/{student_email}/{student_mobile}/{student_gender}/{father_name}/{father_nid}/{father_mobile}/{mother_name}/{mother_nid}/{mother_mobile}/{address_street}/{address_postOffice}/{address_upazila}/{address_zila}/{ssc_board}/{ssc_group}/{ssc_roll}/{ssc_reg}/{ssc_result}/{password}/{inserter_id}', [StudentController::class, 'student_add_data']);


    // this is a sample url for add student using api
    // http://127.0.0.1:8000/api/api-v1/student/add/5625/Computer/23-26/3rd/369-23/36/Suvo/123456/everything885@gmail.com/0175365145/Male/Mahmud/123636/01523642/Salma/1236645/0123652/Hemayetpur/Savar/Savar/Dhaka/Dhaka/Arts/1236/2563152/3.63/123654/100000


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

    Route::post('notice/add', [NoticeController::class, 'notice_add']);

    Route::get('notice/add/{category}/{title}/{description}/{inserter_id}', [NoticeController::class, 'notice_add_data']);











    
    Route::get('/data/{name}', [NoticeController::class, 'postData']);









});