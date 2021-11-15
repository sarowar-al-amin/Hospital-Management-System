<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\DoctorImportController;
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
//     return view('welcome');
// });

// Home controller's route

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect']);

Route::post('/appointment', [HomeController::class, 'appointment']);

Route::get('/myappointment', [HomeController::class, 'myappointment']);

Route::get('/cancel_appointment/{id}', [HomeController::class, 'cancel_appointment']);


// ###################################################################################

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
// ###################################################################################

// Admin controller's route
Route::get('/add_doctor_view', [AdminController::class, 'addview']);

Route::post('/upload_doctor', [AdminController::class, 'upload']);

Route::get('/appointment_show', [AdminController::class, 'appointment_show']);

Route::get('/approve_appoint/{id}', [AdminController::class, 'approve_appoint']);

Route::get('/cancel_appoint/{id}', [AdminController::class, 'cancel_appoint']);

Route::get('/show_doctors', [AdminController::class, 'show_doctors']);

Route::get('/delete_doctor/{id}', [AdminController::class, 'delete_doctor']);

Route::get('/update_doctor/{id}', [AdminController::class, 'update_doctor']);

Route::post('/edit_doctor/{id}', [AdminController::class, 'edit_doctor']);

Route::get('/add_multiple_doctor', [AdminController::class, 'add_multiple_doctor']);

// Doctor Import controller
Route::post('/upload_multiple_doctor', [DoctorImportController::class, 'upload_multiple_doctor']);
