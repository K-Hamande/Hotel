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
        $request->validate(
            [
                'photo'=> 'required|image|mimes:jpeg,jpg,png,gif'
            ]);
            $final_name = time().'.'.$request->photo->extension();
            $request->photo->move(resource_path('uploads/Slide'), $final_name);
            $Date = new Slide();
            $Date->photo = $final_name;
            $Date->heading = $request->heading;
            $Date->text = $request->text;
            $Date->button_text = $request->button_text;
            $Date->button_url = $request->button_url;
            $Date->save();
        return redirect()->back()->with('success','Slide ajouter avec sucess');
    }


    public function Admin_Slide_Edit($id)
    {
        $Slide_Data = Slide::Where('id',$id)->first();
        return view('admin.slide_edit',compact('Slide_Data'));
    }

    public function Admin_Slide_Submit(Request $request,$id)
    {
        $request->validate([
                'photo'=> 'required|image|mimes:jpeg,jpg,png,gif'
            ]);

            $Slide_Data = Slide::Where('id',$id)->first();
            $final_name = time(). '.' .$request->photo->extension();
            $request->photo->move(resource_path('uploads/Slide'), $final_name);
            $Slide_Data->photo = $final_name;
            $Slide_Data->heading = $request->heading;
            $Slide_Data->text = $request->text;
            $Slide_Data->button_text = $request->button_text;
            $Slide_Data->button_url = $request->button_url;
            $Slide_Data->update();
            return redirect()->back()->with('success','modification effectuée avec sucess');


    }
    public function Admin_Slide_Delete($id)
    {
        $Slide_Data = Slide::Where('id',$id)->first();
        unlink(resource_path('uploads/Slide/').$Slide_Data->photo);
        $Slide_Data->delete();
        return redirect()->Route('Admin_Slide')->with('success','modification effectuée avec sucess');
    }
}
