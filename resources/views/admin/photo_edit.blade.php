@extends('admin.layouts.app')

@section('heading','Modification Photo')

@section('Button')
        <a href="{{Route('Admin_Photo')}}" class="btn btn-primary"><i class="fas fa-eye"></i> Tous Les Photo de La Galerie </a>
@endsection

@section('main_content')

<div class="section-body ">
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{Route('Admin_Photo_Update',['id'=>$Photo_Data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <div>
                                        <label class="form-label">Photo Existant </label>
                                    </div>
                                    <img src=" {{Vite::asset('resources/uploads/GaleriesPhoto/').$Photo_Data->photo}} " alt="" class="w_200""> 
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Photo <span class="alert text-danger">*</span> </label>
                                    <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{$Photo_Data->photo}}">  
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Légende <span class="alert text-danger"></span> </label>
                                    <input type="text" class="form-control @error('legende') is-invalid @enderror" name="legende" value="{{$Photo_Data->legende}}">    
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