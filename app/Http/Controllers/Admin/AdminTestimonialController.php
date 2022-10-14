<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AdminTestimonialController extends Controller
{
    public function Index()
    {
        $Testimonial_Display = Testimonial::get();
        return view('admin.Testimonial',compact('Testimonial_Display'));
    }

    public function Admin_Testimonial_Add()
    {
        return view('admin.testimonial_add');
    }
    public function Store(Request $request)
    {
        $request->validate(
            [
                'commentaire' => 'required',
                'designation' => 'required',
                'nom' => 'required',
                'photo' => 'required|mimes:jpg,jpeg,png,gif',
                

            ]);

            $file_name =  time(). '.'. $request->photo->extension(); 
            $request->photo->move(resource_path('uploads/Testimonial'),$file_name);
            $Testimonial = new Testimonial();
            $Testimonial->photo = $file_name;
            $Testimonial->nom = $request->nom ;
            $Testimonial->designation = $request->designation ;
            $Testimonial->commentaire = $request->commentaire;
            $Testimonial->save();
        return redirect()->back()->with('success','Enregistrement Effectuée avec sucess');
    }

    public function Admin_Testimonial_Edit($id)
    {
        $Testimonial_Data = Testimonial::Where('id',$id)->first();
        return view('admin.testimonial_edit',compact('Testimonial_Data'));

    }

    public function Admin_Testimonial_Update(Request $request ,$id)
    {
        $request->validate([
            'commentaire' => 'required',
            'designation' => 'required',
            'nom' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png,gif',

            ]);

            $file_name =  time(). '.'. $request->photo->extension(); 
            $request->photo->move(resource_path('uploads/Testimonial'),$file_name);
            $Update_Testimonial = Testimonial::where('id',$id)->first();
            $Update_Testimonial->photo = $file_name;
            $Update_Testimonial->nom = $request->nom ;
            $Update_Testimonial->designation = $request->designation ;
            $Update_Testimonial->commentaire = $request->commentaire;
            $Update_Testimonial->Update();
            return redirect()->back()->with('success','Mise a jour effecuée avec success');
    }

    public function Admin_Testimonial_Delete($id)
    {
        $Delete_Testimonial = Testimonial::Where('id',$id)->first();
        unlink(resource_path('uploads/Testimonial/').$Delete_Testimonial->photo);
        $Delete_Testimonial->delete();
        return redirect()->back()->with('success','Suppression effecuée avec success');

    }
}
