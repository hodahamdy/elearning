<?php

use App\Http\Controllers\admin\CardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\EntrySectionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/', [HomeController::class, 'index']);

Route::group(['middleware' => ['IsAdminMiddleware']], function (){
    //entry section
    Route::prefix('entrysection')->name('entrysection.')->group( function () {

        Route::controller(EntrySectionController::class)->group( function () {
            Route::get('/index' , 'index')->name('index');
            Route::get('/create' , 'create')->name('create');
            Route::post('/store' , 'store')->name('store');
            Route::get('/edit/{entrysection}' , 'edit')->name('edit');
            Route::post('/update/{id}' , 'update')->name('update');
            Route::get('/delete/{entrysection}' , 'delete')->name('delete');
        });
    });
    Route::prefix('card')->name('card.')->group( function () {

        Route::controller(CardController::class)->group( function () {
            Route::get('/index' , 'index')->name('index');
            Route::get('/create' , 'create')->name('create');
            Route::post('/store' , 'store')->name('store');
            Route::get('/edit/{card}' , 'edit')->name('edit');
            Route::post('/update/{id}' , 'update')->name('update');
            Route::get('/delete/{card}' , 'delete')->name('delete');
        });
    });
});
