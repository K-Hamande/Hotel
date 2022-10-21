@extends('admin.layouts.app')

@section('heading','Modification de About ')

@section('Button')
        <a href="{{Route('Admin_About')}}" class="btn btn-primary"><i class="fas fa-eye"></i> Tous Les Abouts </a>
@endsection

@section('main_content')

<div class="section-body ">
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{Route('Admin_About_Update',['id'=>$About_Data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                               
                                <div class="mb-4">
                                    <label class="form-label">Titre </label>
                                    <input type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" value="{{$About_Data->titre}}">
                                    
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Contenu </label>
                                    <textarea class="form-control snote @error('contenu') is-invalid @enderror" name="contenu" >
                                    

                                        {{$About_Data->contenu}}

                                    </textarea>
                                </div>


                                <div class="mb-4">
                                    <label class="form-label">Status <Span class="alert text-alert">*</Span></label>
                                    <select name="status" class="form-control">
                                        <option value="1" @if($About_Data->statu_About == 1) selected @endif >Afficher</option>
                                        <option value="0" @if($About_Data->statu_About == 0) selected @endif  >Cacher</option>
                                    </select>
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