@extends('admin.layouts.app')

@section('heading','Nouveau Caractéristique')

@section('Button')
        <a href="{{Route('Admin_Feature')}}" class="btn btn-primary"><i class="fas fa-eye"></i> Tous Les Caractéristiques </a>
@endsection

@section('main_content')

<div class="section-body ">
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{Route('Admin_Feature_Store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Icons</label>
                                    <input type="text" class="form-control @error('heading') is-invalid @enderror" name="icon" value="{{old('icon')}}">
                                    
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Titre</label>
                                    <input type="text" class="form-control @error('heading') is-invalid @enderror" name="titre" value="">
                                    
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Description </label>
                                    <textarea class="form-control @error('text') is-invalid @enderror" name="description" value="{{old('description')}}">

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