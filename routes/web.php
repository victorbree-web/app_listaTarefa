<?php

use Illuminate\Support\Facades\Route;

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

use App\HTTP\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [EventController::class,'index']);

Route::get('/nova_tarefa', [EventController::class,'nova_tarefa']);

Route::get('/todas_tarefas', [EventController::class,'todas_tarefas']);



