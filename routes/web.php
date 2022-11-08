<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/',[HomeController::class,'index'])->name('home');
//Route::get('/todo',[TodoController::class,'index'])->name('todo');


Route::prefix('/todo')->group(function(){

    Route::get('/',[TodoController::class,'index'])->name('todo');
    Route::post('/store',[TodoController::class,'store'])->name('todo.store');
    Route::get('/{task_id}/delete',[TodoController::class,'delete'])->name('todo.delete');

});