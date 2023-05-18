<?php

use App\Http\Controllers\StudentController;
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

    Route::get('/student_all', function () {

        $students = Student::all();

        $data = compact('students');
        return view('administration/student_all')->with($data);
        
    })->name('student.all');



});