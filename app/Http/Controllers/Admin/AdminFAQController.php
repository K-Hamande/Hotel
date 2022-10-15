<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\faq;
use Illuminate\Http\Request;

class AdminFAQController extends Controller
{
    public function Index()
    {
        $FAQ_Display = faq::get();
        return view('admin.faq',compact('FAQ_Display'));
    }

    public function Admin_FAQ_Add()
    {
        return view('admin.faq_add');
    }

    public function Store(Request $request)
    {
        $request->validate(
            [
                
                'question' => 'required',
                'reponse' =>  'required',

            ]);

            $FAQ = new faq();
            $FAQ->question = $request->question ;
            $FAQ->reponse = $request->reponse ;
            $FAQ->save();
        return redirect()->back()->with('success','Enregistrement Effectuée avec sucess');
    }

    public function Admin_FAQ_Edit($id)
    {
        $FAQ_Data = faq::Where('id',$id)->first();
        return view('admin.faq_edit',compact('FAQ_Data'));

    }

    public function Admin_FAQ_Update(Request $request ,$id)
    {
        $request->validate([
            'question' => 'required',
            'reponse' =>  'required',

            ]);
            $Update_FAQ = faq::where('id',$id)->first();
            $Update_FAQ->question = $request->question ;
            $Update_FAQ->reponse = $request->reponse ;
            $Update_FAQ->Update();
            return redirect()->back()->with('success','Modification effecuée avec success');
    }

    public function Admin_FAQ_Delete($id)
    {
        $Delete_FAQ = faq::Where('id',$id)->first();
        $Delete_FAQ->delete();
        return redirect()->back()->with('success','Suppression effecuée avec success');

    }

    // public function Photo_Home()
    // {
    //     $Photo_Display = faq::get();
    //     return view('front.photo_gallerie',compact('Photo_Display'));
    // }
}
