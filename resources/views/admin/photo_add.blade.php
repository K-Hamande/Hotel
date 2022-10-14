@extends('admin.layouts.app')

@section('heading','Nouvelle Photo')

@section('Button')
        <a href="{{Route('Admin_Photo')}}" class="btn btn-primary"><i class="fas fa-eye"></i> Tous Les Photo de La Galerie </a>
@endsection

@section('main_content')

<div class="section-body ">
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{Route('Admin_Photo_Store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Photo <span class="alert text-danger">*</span> </label>
                                    <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="">  
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Légende <span class="alert text-danger"></span>  </label>
                                    <textarea  class="form-control snote"  name="legende" id="" cols="30" rows="10"></textarea>
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