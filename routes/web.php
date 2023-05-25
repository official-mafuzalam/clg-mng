<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\NoticeController;
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

    // Student Section
    Route::get('/student_add', [StudentController::class, 'StudentAddPage'])->name('student.addPage');

    Route::post('/student_add', [StudentController::class, 'StudentAdd'])->name('student.add');

    Route::get('/student_all', [StudentController::class, 'StudentALL'])->name('student.all');

    Route::get('/student_edit/{id}', [StudentController::class, 'StudentEdit'])->name('student.edit');

    Route::post('/student_update/{id}', [StudentController::class, 'StudentUpdate'])->name('student.update');

    Route::get('/semester_update', [StudentController::class, 'SemesterUpdateSearch']);

    Route::post('/semester_update', [StudentController::class, 'SemesterUpdate'])->name('semester.update');

    Route::get('/student_trash', [StudentController::class, 'StudentTrashPage'])->name('student.trashPage');

    Route::get('/student_trash/{id}', [StudentController::class, 'StudentTrash'])->name('student.trash');

    Route::get('/student_delete/{id}', [StudentController::class, 'StudentDelete'])->name('student.delete');

    Route::get('/student_restore/{id}', [StudentController::class, 'StudentRestore'])->name('student.restore');



    // Teacher Section

    Route::get('/teacher_add', [TeacherController::class, 'TeacherAddPage'])->name('teacher.addPage');

    Route::post('/teacher_add', [TeacherController::class, 'TeacherAdd'])->name('teacher.add');

    Route::get('/teacher_all', [TeacherController::class, 'TeacherALL'])->name('teacher.all');

    Route::get('/teacher_edit/{id}', [TeacherController::class, 'TeacherEdit'])->name('teacher.edit');

    Route::post('/teacher_update/{id}', [TeacherController::class, 'TeacherUpdate'])->name('teacher.update');

    Route::get('/teacher_trash', [TeacherController::class, 'TeacherTrashPage'])->name('teacher.trashPage');

    Route::get('/teacher_trash/{id}', [TeacherController::class, 'TeacherTrash'])->name('teacher.trash');

    Route::get('/teacher_delete/{id}', [TeacherController::class, 'TeacherDelete'])->name('teacher.delete');

    Route::get('/teacher_restore/{id}', [TeacherController::class, 'TeacherRestore'])->name('teacher.restore');



    // Notice Section

    Route::get('/notice_add', [NoticeController::class, 'NoticeAddPage'])->name('notice.addPage');
    
    Route::post('/notice_add', [NoticeController::class, 'NoticeAdd'])->name('notice.add');

    Route::get('/notice_all', [NoticeController::class, 'NoticeAll'])->name('notice.all');

    Route::get('/notice_edit/{id}', [NoticeController::class, 'NoticeEdit'])->name('notice.edit');

    Route::post('/notice_update/{id}', [NoticeController::class, 'NoticeUpdate'])->name('notice.update');


});