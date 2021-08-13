<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ProfessorsController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\CalendarController;

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

Route::get('/admin', function () {
    return view('admin/index');
});




Route::resource('Students', StudentsController::class)->names('students');
Route::resource('Professors', ProfessorsController::class)->names('professors');
Route::resource('Courses', CoursesController::class)->names('courses');
Route::resource('Classrooms', ClassroomsController::class)->names('classrooms');
Route::resource('Calendar', CalendarController::class)->names('calendar');
