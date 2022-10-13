@extends('admin.layouts.app')

@section('heading','Nouveau Temoignage')

@section('Button')
        <a href="{{Route('Admin_Testimonial')}}" class="btn btn-primary"><i class="fas fa-eye"></i> Tous Les Temoignages </a>
@endsection

@section('main_content')

<div class="section-body ">
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{Route('Admin_Testimonial_Store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Photo <span class="alert text-danger">*</span> </label>
                                    <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="">  
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Nom <span class="alert text-danger">*</span> </label>
                                    <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{old('nom')}}">
                                    
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Designation <span class="alert text-danger">*</span> </label>
                                    <input type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{old('designation')}}">
                                    
                                </div>

                                

                                <div class="mb-4">
                                    
                                    <label class="form-label">Commentaire <span class="alert text-danger">*</span>  </label>
                                <textarea  class="form-control h_100"  name="commentaire" id="" cols="30" rows="10"></textarea>

                                    </textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">AJOUTER</button>
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