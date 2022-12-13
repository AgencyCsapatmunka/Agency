<?php

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