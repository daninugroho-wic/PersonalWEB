<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/rekap', function () {
    return view('rekap');
});
Route::get('/cv', function () {
    return view('cv');
});
Route::get('/quotes', function () {
    return view('quotes');
});

// FOLDER CRUD
Route::get('/crud', function () {
    return view('project.crud');
});
Route::get('/kalkulator', function () {
    return view('hal_project.kalkulator');
});
Route::get('/sticky', function () {
    return view('hal_project.sticky');
});

Route::get('/crud', [UserController::class, 'index'])->name('user.index');
// Route::get('/', function () {
//     return 'Hello Dani';
// });
//Tampilan langsung

//memanggil halaman blade di folder resource > view