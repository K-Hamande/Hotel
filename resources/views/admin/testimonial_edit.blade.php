@extends('admin.layouts.app')

@section('heading','Modification de Caracteristique')

@section('Button')
        <a href="{{Route('Admin_Testimonial')}}" class="btn btn-primary"><i class="fas fa-eye"></i> Tous Les Temoignages </a>
@endsection

@section('main_content')

<div class="section-body ">
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{Route('Admin_Testimonial_Update',['id'=>$Testimonial_Data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <img src=" {{Vite::asset('resources/uploads/Testimonial/').$Testimonial_Data->photo}} " alt="" class="profile-photo w_100_p">
                                <input type="file" class="form-control mt_10" name="photo" >
                            </div>
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Nom</label>
                                    <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{$Testimonial_Data->nom}}">
                                    
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Designation </label>
                                    <input class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{$Testimonial_Data->designation}}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Commaintaire </label>
                                    <input class="form-control @error('designation') is-invalid @enderror" name="commentaire" value="{{$Testimonial_Data->commentaire}}">
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