<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('administration/welcome');
});

Route::group(['prefix' => 'administration'], function () {


    Route::get('/student_add', [StudentController::class, 'StudentAddPage'])->name('student.addPage');

    Route::post('/student_add', [StudentController::class, 'StudentAdd'])->name('student.add');

    Route::get('/student_all',[StudentController::class, 'StudentALL'])->name('student.all');

    Route::get('/student_edit/{id}', [StudentController::class, 'StudentEdit'])->name('student.edit');

    Route::post('/student_update/{id}', [StudentController::class, 'StudentUpdate'])->name('student.update');
    
    Route::get('/semester_update', [StudentController::class, 'SemesterUpdateSearch']);
    
    Route::post('/semester_update', [StudentController::class, 'SemesterUpdate'])->name('semester.update');

    // Teacher Section

    Route::get('/teacher_add', [TeacherController::class, 'TeacherAddPage'])->name('teacher.addPage');

    Route::post('/teacher_add', [TeacherController::class, 'TeacherAdd'])->name('teacher.add');

    Route::get('/teacher_all',[TeacherController::class, 'TeacherALL'])->name('teacher.all');

    Route::get('/teacher_edit/{id}', [TeacherController::class, 'TeacherEdit'])->name('teacher.edit');

    Route::post('/teacher_update/{id}', [TeacherController::class, 'TeacherUpdate'])->name('teacher.update');




});