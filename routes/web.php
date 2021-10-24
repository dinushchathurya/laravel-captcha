<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaptchaController;
 
Route::get('/', [CaptchaController::class, 'index'])->name('get.captcha');
Route::post('/my-captcha', [CaptchaController::class, 'submitCaptcha'])->name('submit.captcha');
Route::get('/refresh_captcha', [CaptchaController::class, 'refreshCaptcha'])->name('refresh.captcha');