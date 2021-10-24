<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptchaController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function submitCaptcha(Request $request)
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required',
            'captcha' => 'required|captcha'
        ],
        ['captcha.captcha'=>'Invalid captcha code.']);
        exit("You are here :) .");
    }
   
    public function refreshCaptcha()
    {
        return response()->json([
            'captcha'=> captcha_img()
        ]);
    }
}
