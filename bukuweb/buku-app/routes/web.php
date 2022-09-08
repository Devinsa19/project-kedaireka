<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookTypeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [BookController::class, "index"]);
Route::get("/create", [BookController::class, "create"])->name("create");
Route::post("/store", [BookController::class, "store"])->name("store");
Route::get("/edit/{id}", [BookController::class, "edit"])->name("edit");
Route::post("/update/{id}", [BookController::class, "update"])->name("update");
Route::delete("/destroy/{id}", [BookController::class, "destroy"])->name("destroy");

Route::get("/book-types", [BookTypeController::class, "index"]);
Route::get("/creategenre", [BookTypeController::class, "creategenre"])->name("creategenre");
Route::post("/storegenre", [BookTypeController::class, "storegenre"])->name("storegenre");
Route::get("/editgenre/{id}", [BookTypeController::class, "editgenre"])->name("editgenre");
Route::post("/updategenre/{id}", [BookTypeController::class, "updategenre"])->name("updategenre");
Route::delete("/destroygenre/{id}", [BookTypeController::class, "destroygenre"])->name("destroygenre");

