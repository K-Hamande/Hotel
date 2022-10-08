<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Mail\Websitemail;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; 


class LoginController extends Controller
{
    public function Login()
    {
        return view('admin.login');
    }
    public function Forget_Password()
    {
        return view('admin.forget_Password');
    }

    public function Login_Submit(Request $request)
    {
        // $pass = hash::make('0123');
        // dd($pass);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
            
        ];

        if(Auth::guard('admin')->attempt($credentials))
        {
            return redirect()->Route('admin_home');
        }
        else{
            return redirect()->Route('admin_login')->with('error','Information Incorrect !');
        }
    }

    public function Logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->Route('admin_login');
    }


    public function Password_Submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $admin_data = Admin::where('email',$request->email)->first();
        if(!$admin_data)
        {
            return redirect()->back()->with('error','Adresse email introuvable');
        }
    }

    
}
