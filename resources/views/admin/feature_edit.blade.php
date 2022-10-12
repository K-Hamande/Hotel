@extends('admin.layouts.app')

@section('heading','Modification de Caracteristique')

@section('Button')
        <a href="{{Route('Admin_Feature')}}" class="btn btn-primary"><i class="fas fa-eye"></i> Tous Les Features </a>
@endsection

@section('main_content')

<div class="section-body ">
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{Route('Admin_Feature_Update',['id'=>$Feature_Data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Icons</label>
                                    <input type="text" class="form-control @error('heading') is-invalid @enderror" name="icon" value="{{$Feature_Data->icons}}">
                                    
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Titre</label>
                                    <input type="text" class="form-control @error('heading') is-invalid @enderror" name="titre" value="{{$Feature_Data->heading}}">
                                    
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Description </label>
                                    <input class="form-control @error('text') is-invalid @enderror" name="description" value="{{$Feature_Data->text}}">
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