<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;
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
Route::prefix("/note")->group(function () {
    Route::get("/", [NoteController::class, "index"])->name("note.index");
    Route::get("{id}/detail", [NoteController::class, "show"])->name("note.show");
    Route::get("/create", [NoteController::class, "create"])->name("note.create");
    Route::post("/create", [NoteController::class, "store"])->name("note.store");
    Route::get("{id}/delete", [NoteController::class, "destroy"])->name("note.destroy");
    Route::get("{id}/update", [NoteController::class, "edit"])->name("note.edit");
    Route::post("{id}/update", [NoteController::class, "update"])->name("note.update");
});

Route::get("/register",[AuthController::class,"showFormRegister"])->name("showForm");
Route::post("/register",[AuthController::class,"register"])->name("register")->middleware("CheckRegister");


Route::get("/login",[AuthController::class,"showFormLogin"])->name("showLogin");
Route::post("/login",[AuthController::class,"login"])->name("login")->middleware("CheckAuth");
