<?php

use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\AccountantsController;
use App\Http\Controllers\Dep_TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\DepositController;
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

    if (Auth::check()) {
        if (auth()->user()->type == 'administration') {
            return redirect()->route('administration.welcome');
        } else if (auth()->user()->type == 'accountants') {
            return redirect()->route('accountants.welcome');
        } else {
            return redirect()->route('dep_teacher.welcome');
        }
    } else {
        return redirect()->route('login');
    }

});

Auth::routes();


/*------------------------------------------
--------------------------------------------
All administration Routes List
--------------------------------------------
--------------------------------------------*/

Route::middleware(['auth', 'user-access:administration'])->group(function () {

    Route::get('/administration/welcome', [AdministrationController::class, 'HomePage'])->name('administration.welcome');

    Route::group(['prefix' => 'administration'], function () {

        Route::get('session', function () {

            $session = session()->all();
            p($session);

        });
        // Student Section
        Route::get('/student_add', [StudentController::class, 'StudentAddPage'])->name('administration_student.addPage');

        Route::post('/student_add', [StudentController::class, 'StudentAdd'])->name('administration_student.add');

        Route::get('/student_all', [StudentController::class, 'StudentALL'])->name('administration_student.all');

        Route::get('/student_edit/{id}', [StudentController::class, 'StudentEdit'])->name('administration_student.edit');

        Route::post('/student_update/{id}', [StudentController::class, 'StudentUpdate'])->name('administration_student.update');

        Route::get('/semester_update', [StudentController::class, 'SemesterUpdateSearch']);

        Route::post('/semester_update', [StudentController::class, 'SemesterUpdate'])->name('semester.update');

        Route::get('/student_trash', [StudentController::class, 'StudentTrashPage'])->name('administration_student.trashPage');

        Route::get('/student_trash/{id}', [StudentController::class, 'StudentTrash'])->name('administration_student.trash');

        Route::get('/student_delete/{id}', [StudentController::class, 'StudentDelete'])->name('administration_student.delete');

        Route::get('/student_restore/{id}', [StudentController::class, 'StudentRestore'])->name('administration_student.restore');



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

        Route::get('/notice_archive', [NoticeController::class, 'NoticeArchivePage'])->name('notice.archivePage');

        Route::get('/notice_archive/{id}', [NoticeController::class, 'NoticeArchive'])->name('notice.archive');

        Route::get('/notice_recycle/{id}', [NoticeController::class, 'NoticeRecycle'])->name('notice.recycle');

        Route::get('/notice_delete/{id}', [NoticeController::class, 'NoticeDelete'])->name('notice.delete');


        // Course Section
        Route::get('course_add', [CourseController::class, 'CourseAddPage'])->name('course.addPage');

        Route::post('course_add', [CourseController::class, 'CourseAdd'])->name('course.add');

        Route::get('course_all', [CourseController::class, 'CourseAllPage'])->name('course.allPage');

        Route::get('/course_edit/{id}', [CourseController::class, 'CourseEdit'])->name('course.edit');

        Route::post('/course_update/{id}', [CourseController::class, 'CourseUpdate'])->name('course.update');

        Route::get('/course_delete/{id}', [CourseController::class, 'CourseDelete'])->name('course.delete');


        // Result Section
        Route::get('/result_publish', [ResultController::class, 'ResultPublishPage'])->name('result.publishPage');

        Route::post('/result_publish', [ResultController::class, 'ResultPublish'])->name('result.publish');

        Route::get('/result_process', [ResultController::class, 'ResultProcess'])->name('result.process');

        Route::post('/save_marks', [ResultController::class, 'ResultSaveMarks'])->name('save_marks');

        Route::get('/result_check', [ResultController::class, 'ResultCheckPage'])->name('result.checkPage');

        Route::post('/result_check', [ResultController::class, 'ResultCheck'])->name('result.check');

        Route::get('/result_edit/{id}', [ResultController::class, 'ResultEdit'])->name('result.edit');

        Route::post('/result_update/{id}', [ResultController::class, 'ResultUpdate'])->name('result.update');

        // Deposit Section

        Route::get('/depositor_find', [DepositController::class, 'DepositFindPage'])->name('deposit.findPage');

        Route::get('/deposit_form/{id}', [DepositController::class, 'DepositForm'])->name('deposit.form');

        Route::post('/deposit_confirm', [DepositController::class, 'DepositConfirm'])->name('deposit.confirm');

        Route::get('/deposit_print/{id}', [DepositController::class, 'DepositPrint'])->name('deposit.print');


        Route::get('/deposit_quarry', [DepositController::class, 'DepositQuarry'])->name('deposit.quarry');
        // 

    });



});



/*------------------------------------------
--------------------------------------------
All dep_teacher Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:dep_teacher'])->group(function () {

    Route::get('/dep_teacher/welcome', [Dep_TeacherController::class, 'HomePage'])->name('dep_teacher.welcome');

    Route::group(['prefix' => 'dep_teacher'], function () {

        Route::get('session', function () {

            $session = session()->all();
            p($session);

        });

        Route::get('/student_add', [StudentController::class, 'StudentAddPage'])->name('student.addPage');


    });

});



/*------------------------------------------
--------------------------------------------
All accountants Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:accountants'])->group(function () {

    Route::get('/accountants/welcome', [AccountantsController::class, 'HomePage'])->name('accountants.welcome');
});

// Route::get('/', [AdministrationController::class, 'HomePage'])->name('home');
