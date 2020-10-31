<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nama', function () {
    return "Nama saya <b>Ari Fahrian Saputra</b>";
});

Route::get('/jurusan', function () {
    return "Jurusan <b>S1 Teknik informatika</b>";
});

Route::get('/angkatan', function () {
    return "Angkatan <b>2018</b>";
});

Route::get('/universitas', function () {
    return "MUHAMMADIYAH KALIMANTAN TIMUR";
});

Route::get('/semester', function () {
    return "Mahasiswa Semester 5";
});


Route::get("/utama/test", [UtamaConrtoller::class, "test"]);
/*1*/
use App\Http\Controllers\ari1Controller;
Route::get("/ari1/ari", [ari1Controller::class, "ari"]);
Route::get("/ari1/saya", [ari1Controller::class, "saya"]);
Route::get("/ari1/riii", [ari1Controller::class, "riii"]);
/*2*/
use App\Http\Controllers\ariController;
Route::get("/ari/gass", [ariController::class, "gass"]);
Route::get("/ari/go", [ariController::class, "go"]);
Route::get("/ari/maju", [ariController::class, "maju"]);