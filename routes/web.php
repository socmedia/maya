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
