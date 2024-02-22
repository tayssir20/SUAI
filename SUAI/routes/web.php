<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormDataController;
use App\Mail\FormDataMail;
use Illuminate\Support\Facades\Mail;


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

Route::get('/', function () {
    return view('SUAI');
});
Route::get('/Button devis', function () {
    return view('Button devis');
})->name('Button devis');


Route::post('/store-form-data', [FormDataController::class, 'store'])->name('store.form.data');




    // Send email

Route::post('/send-email', [FormDataController::class, 'FormDataMail'])->name('send.email');


