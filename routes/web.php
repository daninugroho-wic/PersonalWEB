<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});
Route::get('/index', function () {
    return view('index');
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
Route::get('/portofolio', function () {
    return view('portofolio');
});
// FOLDER ALL
Route::get('/crud', function () {
    return view('all.crud');
});
Route::get('/kalkulator', function () {
    return view('all.kalkulator');
});
Route::get('/sticky', function () {
    return view('all.sticky');
});

// Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/crud', [UserController::class, 'index'])->name('user.index');
// Route::get('/', function () {
//     return 'Hello Dani';
// });
//Tampilan langsung

//memanggil halaman blade di folder resource > view
