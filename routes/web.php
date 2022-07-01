<?php

use App\Models\Classroom;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Grades\GradeController;
use App\Http\Controllers\Classrooms\ClassroomController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/student_dashboard', [App\Http\Controllers\StudentController::class, 'student'])->name('student_dashboard');




Route::resource('grades', GradeController::class);

Route::resource('classroom', ClassroomController::class);

Route::resource('teachers', TeacherController::class);

Route::view('add-parent','livewire.Formparent');


Route::view('add-classes','livewire.Formclasses');







































