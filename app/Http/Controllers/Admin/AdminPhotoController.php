<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GaleriesPhoto;
use Illuminate\Http\Request;

class AdminPhotoController extends Controller
{
    public function Index()
    {
        $Photo_Display = GaleriesPhoto::get();
        return view('admin.photo',compact('Photo_Display'));
    }

    public function Admin_Photo_Add()
    {
        return view('admin.photo_add');
    }

    public function Store(Request $request)
    {
        $request->validate(
            [
                
                'photo' => 'required|mimes:jpg,jpeg,png,gif',

            ]);

            $file_name =  time(). '.'. $request->photo->extension(); 
            $request->photo->move(resource_path('uploads/Galeries'),$file_name);
            $Photo = new GaleriesPhoto();
            $Photo->photo = $file_name;
            $Photo->legende = $request->legende ;
            $Photo->save();
        return redirect()->back()->with('success','Enregistrement Effectuée avec sucess');
    }

    public function Admin_Photo_Edit($id)
    {
        $Photo_Data = GaleriesPhoto::Where('id',$id)->first();
        return view('admin.photo_edit',compact('Photo_Data'));

    }

    public function Admin_Photo_Update(Request $request ,$id)
    {
        $request->validate([
            'photo' => 'required|mimes:jpg,jpeg,png,gif',

            ]);

            $file_name =  time(). '.'. $request->photo->extension(); 
            $request->photo->move(resource_path('uploads/Galeries'),$file_name);
            $Update_Photo = GaleriesPhoto::where('id',$id)->first();
            $Update_Photo->photo = $file_name;
            $Update_Photo->legende = $request->legende ;
            $Update_Photo->Update();
            return redirect()->back()->with('success','Modification effecuée avec success');
    }

    public function Admin_Photo_Delete($id)
    {
        $Delete_Photo = GaleriesPhoto::Where('id',$id)->first();
        
        unlink(resource_path('uploads/Galeries/').$Delete_Photo->photo);
        $Delete_Photo->delete();
        return redirect()->back()->with('success','Suppression effecuée avec success');

    }

    public function Photo_Home()
    {
        $Photo_Display = GaleriesPhoto::get();
        return view('front.photo_gallerie',compact('Photo_Display'));
    }
}
