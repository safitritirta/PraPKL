<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengenalancontroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaffBranchController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BranchController;

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

Route::get('/hello', function () {
    echo '<center><u>Hello semuanya, apa kabar?<br>';
    echo 'Pada kali ini kita sedang belajar route basic<u><center/>';    
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/pages1', function () {
    return view('pages1.index');
});

Route::get('/pages2', function () {
    return view('pages2.index');
});

Route::get('/pages3', function () {
    return view('pages3.index');
});

Route::get('/biodata/{nama}/{umur}/{alamat}/{jk}/{hobby}' , function ($nama,$umur,$alamat,$jk,$hobby) {
    return view('pages1.biodata', compact('nama', 'umur', 'alamat', 'jk', 'hobby'));
});

Route::get('/pesanan/{material?}/{material1?}', function ($material = 'Mohon maaf pesanan anda kosong',$material1 = 'Mohon maaf pesanan anda kosong') {
    return view('pages1.pesanan', compact('material','material1'));
});

Route::get('/pengenalan', [App\Http\Controllers\pengenalancontroller::class, 'pengenalan']);

Route::get('/intro/{nama}/{alamat}/{umur}',[pengenalancontroller::class, 'intro']);

Route::get('/siswa', [pengenalancontroller::class, 'siswa']);

Route::get('/menu', [App\Http\Controllers\LatihanController::class,'menu']);

Route::get('/dosen', [App\Http\Controllers\LatihanController::class,'dosen']);

Route::get('/stasiun', [App\Http\Controllers\LatihanController::class,'stasiun']);

Route::get('/belanja', [App\Http\Controllers\LatihanController::class,'belanja']);

Route::get('/post', [PostController::class, 'index']);

Route::get('/StaffBranch', [StaffBranchController::class, 'index']);

Route::get('/Staff', [StaffController::class, 'index']);

Route::get('/Branch', [BranchController::class, 'index']);