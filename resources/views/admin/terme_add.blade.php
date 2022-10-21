@extends('admin.layouts.app')

@section('heading','Nouveau Termes et conditons')

@section('Button')
        <a href="{{Route('Admin_Terme')}}" class="btn btn-primary"><i class="fas fa-eye"></i> Tous Les Termes et conditons </a>
@endsection

@section('main_content')

<div class="section-body ">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{Route('Admin_Terme_Store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">

                                <div class="mb-4">
                                    <label class="form-label">Titre <Span class="alert text-alert">*</Span> </label>
                                    <input type="text" class="form-control @error('titre_terme') is-invalid @enderror" name="titre_terme" value="{{old('titre_terme')}}">
                                </div>
                                
                                <div class="mb-4">
                                    <label class="form-label">Contenu <Span class="alert text-alert">*</Span></label>
                                    <textarea class="form-control snote @error('contenu_terme') is-invalid @enderror" name="contenu_terme" ></textarea>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Status <Span class="alert text-alert">*</Span></label>
                                    <select name="status_terme" class="form-control">
                                        <option value="1">Afficher</option>
                                        <option value="0">Cacher</option>
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