@extends('admin.layouts.app')

@section('heading','Modifier Une Slide')

@section('main_content')

@section('Button')
        <a href="{{Route('Admin_Slide')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Tous Les Slides </a>
@endsection


<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
            
    </div>
@if(session()->get('error'))
    <div class="alert alert-danger">{{session()->get('error')}}</div>
@endif
                    <form action="{{Route('Admin_Slide_Submit',['id'=> $Slide_Data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <img src=" {{Vite::asset('resources/uploads/Slide/'.$Slide_Data->photo) }} " alt="" class="profile-photo w_100_p">
                                <input type="file" class="form-control mt_10" name="photo" >
                            </div>
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Titre<span class="alert text-danger"></span></label>
                                    <input type="text" class="form-control @error('heading') is-invalid @enderror" name="heading" value="{{$Slide_Data->heading}}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label @error('description') is-invalid @enderror ">Description</label>
                                    <input type="text" class="form-control @error('text') is-invalid @enderror" name="text" value="{{ $Slide_Data->text}}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Button Text</label>
                                    <input type="text" class="form-control @error('button_text') is-invalid @enderror " name="button_text" value="{{ $Slide_Data->button_text}}">

                                </div>

                                <div class="mb-4">
                                    <label class="form-label">button URL </label>
                                    <input type="text" class="form-control  @error('button_url') is-invalid @enderror" name="button_url" value="{{ $Slide_Data->button_url}}">

                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Modifier</button>
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

