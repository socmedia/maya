<?php

use App\Http\Requests\ContactUsRequest;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('landing.index');
});

Route::post('/hubungi-kami', function (ContactUsRequest $request) {
    return Mail::to(env('MAIL_FROM_ADDRESS', 'info@mayaspringbed.id'))->queue(new ContactUsMail($request->all()));
})->name('send.contactUs');

Auth::routes(['verify' => true, 'register' => false]);

Route::group([
    'prefix' => '__secret',
    'middleware' => 'verified',
], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    # Blog Route
    Route::group([
        'prefix' => 'artikel',
        'as' => 'article.',
    ], function () {
        Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('index');
        Route::get('/tambah', [App\Http\Controllers\BlogController::class, 'create'])->name('create');
        Route::post('/', [App\Http\Controllers\BlogController::class, 'store'])->name('post');
        Route::get('/baca/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('show');
        Route::get('/ubah/{slug}', [App\Http\Controllers\BlogController::class, 'edit'])->name('edit');
        Route::put('/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('update');
        Route::delete('/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('delete');
    });
});