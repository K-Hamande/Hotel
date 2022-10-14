<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Post;
use App\Models\Slide;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        $Slide_Display = Slide::get();
        $Feature_Display = Feature::get();
        $Testimonial_Display = Testimonial::get();
        $Post_Display = Post::OrderBy('id','desc')->limit(3)->get();
        return view('front.home',compact('Slide_Display','Feature_Display','Testimonial_Display','Post_Display'));
    }

}
