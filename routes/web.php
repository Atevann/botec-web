<?php

use Illuminate\Support\Facades\Route;

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
        // код проверки соединения с базой данных и вывода сообщения
    return view('welcome');
});

Route::get('/health', function () {
    try {
        DB::connection()->getPdo();
        return 'Соединение с базой данных установлено: успешно!';
    } catch (\Exception $e) {
        return 'Ошибка соединения с базой данных: ' . $e->getMessage();
    }
});
