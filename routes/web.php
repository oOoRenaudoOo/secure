<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MonCompteController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('moncompte',[MonCompteController::class,'index']);


Route::get('panier',[MonCompteController::class,'panier']);


// Route administration
Route::get('admin',[DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');


// administration des utilisateurs
Route::get('admin/user',[UserController::class,'index'])->middleware(['auth'])->name('admin.user');


//administration list des actus
Route::get('admin/actu-lister',[ActuController::class,'index'])->middleware(['auth'])->name('admin.actu-lister');


Route::get('admin/actu-editer',[ActuController::class,'editer'])->middleware(['auth'])->name('admin.actu-editer');