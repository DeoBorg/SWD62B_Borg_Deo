<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\StudentController;
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
    return view('welcome');
});

//College routes
Route::get('/colleges', [CollegeController::class, 'index'])->name('colleges.index'); // list all colleges
Route::get('/colleges/create', [CollegeController::class, 'create'])->name('colleges.create'); //  form to add a new college
Route::post('/colleges', [CollegeController::class, 'storeCollege'])->name('colleges.store'); // store a new college
Route::get('/colleges/{id}/edit', [CollegeController::class, 'edit'])->name('colleges.edit'); // form to update a college's details
Route::put('/colleges/{id}', [CollegeController::class, 'updateCollege'])->name('colleges.update'); // update a college's details
Route::delete('/colleges/{id}', [CollegeController::class, 'deleteCollege'])->name('colleges.destroy'); // delete a college

//Student routes
Route::get('students', [StudentController::class, 'index'])->name('students.index'); // list all students
Route::get('students/create', [StudentController::class, 'create'])->name('students.create'); // form to add a new student
Route::post('students', [StudentController::class, 'storeStudent'])->name('students.store'); // store a new student
Route::get('students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit'); // form to update a student's details
Route::put('students/{id}', [StudentController::class, 'updateStudent'])->name('students.update'); // update a student's details
Route::delete('students/{id}', [StudentController::class, 'deleteStudent'])->name('students.destroy'); // delete a student record