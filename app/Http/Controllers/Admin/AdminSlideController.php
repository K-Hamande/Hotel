<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;

class AdminSlideController extends Controller
{
    public function Index()
    {
        $Slide = Slide::get();
        return view('admin.slide',compact('Slide'));
    }

    public function Add()
    {
        $Slide = Slide::get();
        return view('admin.slide_add');
    }


    public function Store(Request $request)
    {
        
        //dd('yes');
        $request->heading;
        return view('admin.slide_add');
    }
}
