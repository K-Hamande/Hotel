@extends('admin.layouts.app')

@section('heading','Modification des Politiques et Confidentialités')

@section('Button')
        <a href="{{Route('Admin_Terme')}}" class="btn btn-primary"><i class="fas fa-eye"></i> Tous Les Termes et conditons </a>
@endsection

@section('main_content')

<div class="section-body ">
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{Route('Admin_Politique_Update',['id'=>$Politique_Data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                               
                                <div class="mb-4">
                                    <label class="form-label">Titre </label>
                                    <input type="text" class="form-control @error('titre_politique') is-invalid @enderror" name="titre_politique" value="{{$Politique_Data->titre_politique}}">
                                    
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Contenu </label>
                                    <textarea class="form-control snote @error('contenu_politique') is-invalid @enderror" name="contenu_politique" >
                                    

                                        {{$Politique_Data->contenu_politique}}

                                    </textarea>
                                </div>


                                <div class="mb-4">
                                    <label class="form-label">Status <Span class="alert text-alert">*</Span></label>
                                    <select name="status_politique" class="form-control">
                                        <option value="1" @if($Politique_Data->status_politique == 1) selected @endif >Afficher</option>
                                        <option value="0" @if($Politique_Data->status_politique == 0) selected @endif  >Cacher</option>
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