<?php

use Illuminate\Support\Facades\Route;
use App\Providers\healthService;

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

Route::get('/', function () 
{
        // код проверки соединения с базой данных и вывода сообщения
    return view('welcome');
});



Route::get('/healthService', [healthService::class, 'checkStatus']);
