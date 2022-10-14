<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class AdminProfileController extends Controller
{
    public function Index()
    {
        $Profil = Admin::all();
        return view('admin.profile',compact('Profil'));
    }

    public function Edit_Profile_Submit(Request $request)

    {
        $Data = Admin::where('email',Auth::guard('admin')->user()->email)->first();
        $request->validate([
            'name' => 'required|max:100|min:6',
            'email' => 'required|email',
        ]);
        
      
        if($request->hasFile('photo'))
         {
             $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif'
             ]);

            $final_name= 'admin'. '.'.$request->photo->extension();
            $request->photo->move(resource_path('uploads'), $final_name);
           $Data->Photo = $final_name ;
         }

        if($request->new_password != '' and  $request->retype_password != '' )
            {
                    $request->validate([
                        'new_password'=>'|max:100|min:4',
                        'retype_password'=>'|max:100|min:4',
                    ]);
                            if($request->new_password == $request->retype_password)
                                {
                                    $pass = Hash::make($request->new_password);
                                    $Data->password = $pass; 
                                }
                                else
                                {
                                    return redirect()->back()->with('error','Mots de Passe incorrect !');
                                }
        }

            $Data->Nom = $request->name;
            $Data->email = $request->email;
            $Data->update();
            return redirect()->back()->with('success','Mise a jour effectuée avec success !');
       
       
    }
}
