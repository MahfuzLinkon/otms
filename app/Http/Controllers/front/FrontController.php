<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        return view('front.home.home', [
            'courses' => Course::where('status', 1)->orderBy('id', 'DESC')->get(),
        ]);
    }

    public function aboutUs(){
        return view('front.about.about');
    }

    public function contactUs(){
        return view('front.contact.contact');
    }

    public function categoryCourse($id){

        return view('front.course.index', [
            'courses' => Course::where('category_id', $id)->where('status',1)->orderBy('id', 'DESC')->get(),
            'category' => CourseCategory::find($id),
        ]);
    }



















}
