<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminFormController extends Controller
{
    public function Index()
    {
        return view('admin.form',compact('Button'));
    }
}
