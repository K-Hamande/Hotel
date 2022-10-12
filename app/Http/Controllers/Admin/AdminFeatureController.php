<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class AdminFeatureController extends Controller
{
    public function Index()
    {
        $Feature_Display = Feature::get();
        return view('admin.feature',compact('Feature_Display'));
    }

    public function Admin_Feature_Add()
    {
        return view('admin.feature_add');
    }
    public function Store(Request $request)
    {
        $request->validate(
            [
                'titre' => 'required',
                'icon' => 'required'

            ]);

            $Feature = new Feature();
            $Feature->icons = $request->icon;
            $Feature->heading = $request->titre ;
            $Feature->text = $request->description;
            $Feature->save();

        return redirect()->back()->with('Success','Enregistrement Effectuée avec sucess');
    }

    public function Admin_Feature_Edit($id)
    {
        $Feature_Data = Feature::Where('id',$id)->first();
        return view('admin.feature_edit',compact('Feature_Data'));

    }

    public function Admin_Feature_Update(Request $request ,$id)
    {
        $request->validate([
                'titre' => 'required',
                'icon' => 'required'

            ]);

            $Feature_Update = Feature::Where('id',$id)->first();
            $Feature_Update->icons = $request->icon;
            $Feature_Update->heading = $request->titre;
            $Feature_Update->text = $request->description;
            $Feature_Update->Update();
            return redirect()->back()->with(['Success','Mise a jour effecuée avec success']);
    }

    public function Admin_Feature_Delete($id)
    {
        $Delete_Feature = Feature::Where('id',$id)->first();
        $Delete_Feature->delete();
        return redirect()->back()->with(['Success','Suppression effecuée avec success']);

    }
}
