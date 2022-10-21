<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Terme;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function Index()
    {
        $About_Display = Page::get();
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
                'status' =>  'required',

            ]);

            $About = new Page();
            $About->titre = $request->titre ;
            $About->contenu = $request->contenu ;
            $About->statu_About = $request->status;
            $About->save();
        return redirect()->back()->with('success','Enregistrement Effectuée avec sucess');
    }

    public function Admin_About_Edit($id)
    {
        $About_Data = Page::Where('id',$id)->first();
        return view('admin.About_edit',compact('About_Data'));

    }

    public function Admin_About_Update(Request $request ,$id)
    {
        $request->validate([
            'titre' => 'required',
            'contenu' =>  'required',
            'status' =>  'required',

            ]);
            $Update_About = Page::where('id',$id)->first();
            $Update_About->titre = $request->titre ;
            $Update_About->contenu = $request->contenu ;
            $Update_About->statu_About = $request->status ;
            $Update_About->Update();
            return redirect()->back()->with('success','Modification effecuée avec success');
    }

    public function Admin_About_Delete($id)
    {
        $Delete_About = Page::Where('id',$id)->first();
        $Delete_About->delete();
        return redirect()->back()->with('success','Suppression effecuée avec success');

    }

     public function About_Home()
     {
         $About_Display = Page::where('id',1)->first();
         return view('front.about',compact('About_Display'));
     }


     // partie terme et condition


    public function Index_Terme()
    {
        $Terme_Display = Terme::get();
        return view('admin.terme',compact('Terme_Display'));
    }

    public function Admin_Terme_Add()
    {
        return view('admin.Terme_add');
    }

    public function Store_Terme(Request $request)
    {
        $request->validate(
            [
                
                                
                'contenu_terme' => 'required',
                'titre_terme' =>  'required',
                'status_terme' =>  'required',

            ]);

            $Terme = new Terme();
            $Terme->contenu_terme = $request->contenu_terme ;
            $Terme->titre_terme = $request->titre_terme ;
            $Terme->status_terme = $request->status_terme;
            $Terme->save();
        return redirect()->back()->with('success','Enregistrement Effectuée avec sucess');
    }

    public function Admin_Terme_Edit($id)
    {
        $Terme_Data = Terme::Where('id',$id)->first();
        return view('admin.Terme_edit',compact('Terme_Data'));

    }

    public function Admin_Terme_Update(Request $request ,$id)
    {
        $request->validate([
            'titre_terme' => 'required',
            'contenu_terme' =>  'required',
            'status_terme' =>  'required',

            ]);
            $Update_Terme = Terme::where('id',$id)->first();
            $Update_Terme->titre_terme = $request->titre_terme ;
            $Update_Terme->contenu_terme = $request->contenu_terme ;
            $Update_Terme->status_terme = $request->status_terme ;
            $Update_Terme->Update();
            return redirect()->back()->with('success','Modification effecuée avec success');
    }

    public function Admin_Terme_Delete($id)
    {
        $Delete_Terme = Terme::Where('id',$id)->first();
        $Delete_Terme->delete();
        return redirect()->back()->with('success','Suppression effecuée avec success');

    }

     public function Terme_Home()
     {
         $Terme_Display = Terme::where('id',1)->first();
         return view('front.Terme_Front',compact('Terme_Display'));
     }
}
