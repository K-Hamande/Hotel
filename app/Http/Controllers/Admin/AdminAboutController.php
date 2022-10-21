<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    public function Index()
    {
        $About_Display = About::get();
        return view('admin.about',compact('About_Display'));
    }

    public function Admin_About_Add()
    {
        return view('admin.About_add');
    }

    public function Store(Request $request)
    {
        $request->validate(
            [
                
                                
                'contenu' => 'required',
                'titre' =>  'required',

            ]);

            $About = new About();
            $About->titre = $request->titre ;
            $About->contenu = $request->contenu ;
            $About->save();
        return redirect()->back()->with('success','Enregistrement Effectuée avec sucess');
    }

    public function Admin_About_Edit($id)
    {
        $About_Data = About::Where('id',$id)->first();
        return view('admin.About_edit',compact('About_Data'));

    }

    public function Admin_About_Update(Request $request ,$id)
    {
        $request->validate([
            'titre' => 'required',
            'contenu' =>  'required',

            ]);
            $Update_About = About::where('id',$id)->first();
            $Update_About->titre = $request->titre ;
            $Update_About->contenu = $request->contenu ;
            $Update_About->Update();
            return redirect()->back()->with('success','Modification effecuée avec success');
    }

    public function Admin_About_Delete($id)
    {
        $Delete_About = About::Where('id',$id)->first();
        $Delete_About->delete();
        return redirect()->back()->with('success','Suppression effecuée avec success');

    }

     public function About_Home()
     {
         $About_Display = About::get()->last();
         return view('front.about',compact('About_Display'));
     }
}
