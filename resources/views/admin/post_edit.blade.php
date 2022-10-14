@extends('admin.layouts.app')

@section('heading','Modification Post')

@section('Button')
        <a href="{{Route('Admin_Post')}}" class="btn btn-primary"><i class="fas fa-eye"></i> Tous Les Posts </a>
@endsection

@section('main_content')

<div class="section-body ">
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{Route('Admin_Post_Update',['id'=>$Post_Data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <div>
                                        <label class="form-label">Photo Existant </label>
                                    </div>
                                    <img src=" {{Vite::asset('resources/uploads/Post/').$Post_Data->photo}} " alt="" class="w_200""> 
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Photo <span class="alert text-danger">*</span> </label>
                                    <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{$Post_Data->photo}}">  
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Titre <span class="alert text-danger">*</span> </label>
                                    <input type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" value="{{$Post_Data->titre}}">    
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Mini Contenu <span class="alert text-danger">*</span>  </label>
                                    <textarea class="form-control h_100" name="mini_contenu" id="" cols="30" rows="10"></textarea>
                                </div>
                                <div class="mb-4">
                                    
                                    <label class="form-label">Contenu <span class="alert text-danger">*</span>  </label>
                                    <textarea class="form-control snote" name="contenu" id="" cols="30" rows="10"></textarea>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">AJOUTER</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection