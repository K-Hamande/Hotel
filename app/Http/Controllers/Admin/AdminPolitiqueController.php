<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Politique;
use Illuminate\Http\Request;

class AdminPolitiqueController extends Controller
{
    
    public function Index()
    {
        $Politique_Display = Politique::get();
        return view('admin.politique',compact('Politique_Display'));
    }

    public function Admin_Politique_Add()
    {
        return view('admin.politique_add');
    }

    public function Store(Request $request)
    {
        $request->validate(
            [          
                'contenu_politique' => 'required',
                'titre_politique' =>  'required',
                'status_politique' =>  'required',
            ]);

            $Politique = new Politique();
            $Politique->contenu_politique = $request->contenu_politique ;
            $Politique->titre_politique = $request->titre_politique ;
            $Politique->status_politique = $request->status_politique;
            $Politique->save();
        return redirect()->back()->with('success','Enregistrement Effectuée avec sucess');
    }

    public function Admin_Politique_Edit($id)
    {
        $Politique_Data = Politique::Where('id',$id)->first();
        return view('admin.politique_edit',compact('Politique_Data'));

    }

    public function Admin_Politique_Update(Request $request ,$id)
    {
        $request->validate([
            'titre_politique' => 'required',
            'contenu_politique' =>  'required',
            'status_politique' =>  'required',

            ]);
            $Update_Politique = Politique::where('id',$id)->first();
            $Update_Politique->titre_politique = $request->titre_politique ;
            $Update_Politique->contenu_politique = $request->contenu_politique ;
            $Update_Politique->status_politique = $request->status_politique ;
            $Update_Politique->Update();
            return redirect()->back()->with('success','Modification effecuée avec success');
    }

    public function Admin_Politique_Delete($id)
    {
        $Delete_Politique = Politique::Where('id',$id)->first();
        $Delete_Politique->delete();
        return redirect()->back()->with('success','Suppression effecuée avec success');

    }

     public function Politique_Home()
     {
         $Politique_Display = Politique::where('id',1)->first();
         return view('front.Politique_Front',compact('Politique_Display'));
     }
}
