<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        return view('front.home.home');
    }

    public function aboutUs(){
        return view('front.about.about');
    }

    public function contactUs(){
        return view('front.contact.contact');
    }



















}
