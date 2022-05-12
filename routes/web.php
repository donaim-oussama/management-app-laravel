<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
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

Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/category/{category}', [ProjectController::class, 'viewcat']);
Route::get('/projects/details/{title}', [ProjectController::class, 'details']);
Route::get('/projects/create', [ProjectController::class, 'create']);   
Route::post('/projects/create', [ProjectController::class, 'store']);
Route::get('/projects/{project}/edit', [ProjectController::class, 'edit']);
Route::put('/projects/details/{project}', [ProjectController::class, 'update']);
Route::get('/projects/{project}/delete', [ProjectController::class, 'destroy']);


Route::get('/projects/add-student', [ProjectController::class, 'addStudent']);
Route::post('/projects', [ProjectController::class, 'storeStudent']);
Route::get('/projects/remove-student', [ProjectController::class, 'deletion']);
Route::post('/projects/remove-student', [ProjectController::class, 'removeStudent']);


Route::get('/events/add-project', [EventController::class, 'addProject']);
Route::post('/events/add-project', [EventController::class, 'storeProject']);


Route::get('/events', [EventController::class, 'index']);
Route::get('/events/details/{event}', [EventController::class, 'details']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);
Route::get('/events/{event}/edit', [EventController::class, 'edit']);
Route::put('/events/details/{event}', [EventController::class, 'update']);
Route::get('/events/{event}/delete', [EventController::class, 'destroy']);