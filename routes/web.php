<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PostController; 
// use App\Http\Controllers\BlogListController;
use App\Http\Livewire\BlogTable;

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
    // return view('welcome');
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware('auth')->group(static function () {
    Route::resource('post',PostController::class);
    // Route::get('/blog-list',[BlogListController::class, 'index'])->name('blog-list');
    // Route::post('/blog-comment',[BlogListController::class, 'store'])->name('blog-comment');
    Route::get('post-list', BlogTable::class)->name('post-list');
});