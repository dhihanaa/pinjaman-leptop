<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Models\Laptop;

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

//login register
Route::middleware('isGuest')->group(function() {
    Route::post('/login', [LoginController::class, 'login'])->name('login-baru');
    Route::get('/login-baru',[LaptopController::class,'login']);
    Route::get('/login',[LoginController::class,'bebas']);
    Route::get('/register',[LaptopController::class,'register']);
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/dashboard', [TodoController::class, 'dashboard'])->name('dashboard');
});

//dashboard
Route::get('/', function () {
    $laptops = Laptop::all();
    $hari=\Carbon\Carbon::now()->format('Y-m-d');
    return view('dashboard', compact('laptops', 'hari'));
});

//create index
Route::post('/tambah', [LaptopController::class, 'store']);
Route::get('/create', [LaptopController::class, 'create'])->name('create');
Route::get('/data', [LaptopController::class, 'index']);
// Route::get('/data', [LaptopController::class, 'data'])->name('data');
Route::patch('/complated/{id}',[LaptopController::class, 'complated'])->name('/story');
Route::delete('/destroy/{id}',[LaptopController::class, 'destroy'])->name('/story');

//logout
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
//end logout