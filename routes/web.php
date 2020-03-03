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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blade', function () {
    return view('child', [
        'name' => 'Khon!',
        'array' => [
            'My Name' => 'Kim',
            'Hi' => 'Hello',
        ],
        'options' => [
            'Laravel5' => 'Laravel5',
            'Laravel6' => 'Laravel6',
            'Laravel7' => 'Laravel7',
        ],
    ]);
});
