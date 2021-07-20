<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentSave;
// /
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

// Route::get('/', function () {
//     return view('home');
// });


// route for Student_table
// Route::get('/',[StudentController::class,'show'])->name('home');


// Route::get('header',function(){
//     return view('home');
// });

Route::get('/accounts',[StudentController::class,'accounts'])->name('accounts');
// Route::get('/accounts',function(){
//         return view('accounts');
// })->name('accounts');
Route::post('submit',[StudentController::class,'save']);

Route::get('/edit-post/{id}',[StudentController::class,'edit']);
Route::get('/delete-post/{id}',[StudentController::class,'delete']);
Route::post('/update-post',[StudentController::class,'update']);
Route::get('/', [StudentController::class, 'getStudents'])->name('home');