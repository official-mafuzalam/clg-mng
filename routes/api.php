<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\TeacherController;

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



    Route::get('all_students', [StudentController::class, 'all_students']);

    Route::get('student/user_id/{user_id}', [StudentController::class, 'student_user_id']);

    Route::get('student/technology/{technology}', [StudentController::class, 'student_technology']);
    
    Route::get('student/tech_sem/{technology}/{semester}', [StudentController::class, 'student_tech_sem']);





    Route::get('quarry_fees/{user_id}', [StudentController::class, 'quarry_fees']);



});