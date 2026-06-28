<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BespokeInquiryController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/bespoke-inquiry', [BespokeInquiryController::class, 'store'])->name('bespoke.store');
