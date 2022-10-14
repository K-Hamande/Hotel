<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function Index()
    {
        $Post_Display = Post::get();
        return view('admin.post',compact('Post_Display'));
    }

    public function Admin_Post_Add()
    {
        return view('admin.post_add');
    }

    public function Store(Request $request)
    {
        $request->validate(
            [
                
                'contenu' => 'required',
                'mini_contenu' => 'required',
                'titre' => 'required',
                'photo' => 'required|mimes:jpg,jpeg,png,gif',
                

            ]);

            $file_name =  time(). '.'. $request->photo->extension(); 
            $request->photo->move(resource_path('uploads/Post'),$file_name);
            $Post = new Post();
            $Post->photo = $file_name;
            $Post->titre = $request->titre ;
            $Post->mini_contenu = $request->mini_contenu ;
            $Post->contenu = $request->contenu;
            $Post->nombre_de_vue = 1;
            $Post->save();
        return redirect()->back()->with('success','Enregistrement Effectuée avec sucess');
    }

    public function Admin_Post_Edit($id)
    {
        $Post_Data = Post::Where('id',$id)->first();
        return view('admin.post_edit',compact('Post_Data'));

    }

    public function Admin_Post_Update(Request $request ,$id)
    {
        $request->validate([
            'contenu' => 'required',
            'mini_contenu' => 'required',
            'titre' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png,gif',

            ]);

            $file_name =  time(). '.'. $request->photo->extension(); 
            $request->photo->move(resource_path('uploads/Post'),$file_name);
            $Update_Post = Post::where('id',$id)->first();
            $Update_Post->photo = $file_name;
            $Update_Post->titre = $request->titre ;
            $Update_Post->mini_contenu = $request->mini_contenu ;
            $Update_Post->contenu = $request->contenu;
            $Update_Post->Update();
            return redirect()->back()->with('success','Modification effecuée avec success');
    }

    public function Admin_Post_Delete($id)
    {
        $Delete_Post = Post::Where('id',$id)->first();
        unlink(resource_path('uploads/Post/').$Delete_Post->photo);
        $Delete_Post->delete();
        return redirect()->back()->with('success','Suppression effecuée avec success');

    }


    public function Blog_Home()
    {
        $Blog_Display = Post::OrderBy('id','desc')->get();
        return view('front.blog',compact('Blog_Display'));
    }

    public function Post($id)
    {
        $Post_Display = Post::Where('id',$id)->first();
        $Post_Display->nombre_de_vue = $Post_Display->nombre_de_vue+ 1;
        $Post_Display->update();
        return view('front.post',compact('Post_Display'));
    }
}
