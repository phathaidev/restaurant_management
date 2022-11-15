<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\ReservationController;



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

Route::get('/',[HomeController::class, 'index'])->name("home");

Route::get('/redirects' , [HomeController::class, 'redirects']);

Route::get('/users' , [AdminController::class, 'user'])->name("admin.users");

Route::get('/deleteuser/{id}' , [AdminController::class, 'deleteuser']);

Route::get('/foods' , [FoodController::class , 'index'])->name("admin.food");

Route::post("/uploadfood", [AdminController::class, 'upload'])->name("admin.foodupload");

Route::get("/foodlist", [AdminController::class, 'foodtable'])->name("admin.foodlist");

Route::get("/deletefood/{id}", [AdminController::class, 'deleteFood'])->name("admin.deletefood");

Route::get("/editfood/{id}", [AdminController::class, 'editfood']);

Route::post("/updatefood/{id}", [AdminController::class, "updatefood"])->name("admin.updatefood");

Route::get('/chefs' , [ChefController::class , 'index'])->name("admin.chefs");

Route::post('/uploadchef' , [ChefController::class , 'store'])->name("admin.uploadchef");

Route::get('/listchef' , [ChefController::class , 'show'])->name("admin.listchef");

Route::get('/deletechef/{id}' , [ChefController::class , 'destroy'])->name("admin.deletechef");

Route::get('/editchef/{id}' , [ChefController::class , 'edit'])->name("admin.editchef");

Route::post('/updatechef/{id}' , [ChefController::class , 'update'])->name("admin.updatechef");

Route::get("/reservation", [ReservationController::class, "index"])->name("admin.reservation");

Route::post("/uploadreservation", [ReservationController::class, 'store'])->name("admin.uploadreservation");

Route::get("/deletereservation/{id}", [ReservationController::class, 'destroy'])->name("admin.deletereservation");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
