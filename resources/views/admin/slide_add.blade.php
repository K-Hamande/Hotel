@extends('admin.layouts.app')

@section('heading','Nouveau Slide')

@section('Button')
        <a href="{{Route('Admin_Slide')}}" class="btn btn-primary"><i class="fas fa-eye"></i> Tous Les Slides </a>
@endsection

@section('main_content')

<div class="section-body ">
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{Route('Admin_Slide_Store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Photo <span class="alert text-danger">*</span> </label>
                                    <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="">  
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Titre</label>
                                    <input type="text" class="form-control @error('heading') is-invalid @enderror" name="heading" value="">
                                    
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Description </label>
                                    <input type="text" class="form-control @error('text') is-invalid @enderror" name="text" value="{{old('text')}}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Button Text </label>
                                    <input type="text" class="form-control @error('button_text') is-invalid @enderror" name="button_text" value="{{old('button_text')}}">
                                    
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Button URL </label>
                                    <input type="text" class="form-control @error('button_url') is-invalid @enderror" name="button_url" value="{{old('button_url')}}">
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