<?php

use App\Http\Controllers\AgencyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipateController;
use App\Http\Controllers\EventController;

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

//Events
Route::get('/api/events', [EventController::class, 'allEvent']);
Route::get('/api/event_show/{id}', [EventController::class, 'show']);
Route::post('/api/new_event', [EventController::class, 'newEvent']);
Route::patch('/api/update_event_status/{id}', [EventController::class, 'updateStatus']);
Route::delete('/api/delete_event/{id}', [EventController::class, 'destroy']);

//Participate
Route::get('/api/participates', [ParticipateController::class, 'allParticipate']);
Route::get('/api/user_participates/{id}', [ParticipateController::class, 'userParticipates']);
Route::get('/api/user_participate/{event_id}/{user_id}', [ParticipateController::class, 'show']);
Route::post('/api/new_participate', [ParticipateController::class, 'newParticipate']);
Route::put('/api/update_participate_present/{event_id}/{user_id}', [ParticipateController::class, 'updatePresent']);
Route::delete('/api/participate_delete/{event_id}/{user_id}', [ParticipateController::class, 'destroy']);
//Agency
Route::get('/api/agency',[AgencyController::class,'index']);
Route::get('/api/agency/{id}',[AgencyController::class,'show']);
Route::post('/api/new_agency',[AgencyController::class,'store']);
Route::put('/api/update_agency/{id}',[AgencyController::class,'update']);
Route::delete('/api/destroy_agency/{id}',[AgencyController::class,'destroy']);
//Users
Route::get('api/users', [UserController::class,'index']);
Route::get('api/users/{id}', [UserController::class,'show']);
Route::post('api/users', [UserController::class,'store']);
Route::put('api/users/{id}', [UserController::class,'update']);
Route::delete('api/users/{id}', [UserController::class,'destroy']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
