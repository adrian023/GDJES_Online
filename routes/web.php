<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnrollmentController;
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

Route::get('enrollment', function (){ return view('enrollment'); })->name('enrollmentGet');
Route::post('enrollment', [EnrollmentController::class, 'postEnrollment'])->name('enrollmentPost');

Route::get('enrollment1', [EnrollmentController::class, 'getEnrollment1'])->name('enrollmentGet1');
Route::post('enrollment1', [EnrollmentController::class, 'postEnrollment1'])->name('enrollmentPost1');

Route::get('login', function () {
    return view('welcome');
})->name('login');

Route::get('register', function () {
    return view('welcome');
})->name('register');