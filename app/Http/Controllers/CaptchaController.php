<?php

namespace App\Http\Controllers;

use App\Models\captcha;
use Illuminate\Http\Request;

class CaptchaController extends Controller
{
    public function index(){
        return view('registro');
    }
    public function submit_form(Request $res){
        $res->validate([
             'captcha' => 'required|captcha'
        ]);
    }
    public function reload(){
        return response()->json(['captcha'=> captcha_img()]);
    }
}
