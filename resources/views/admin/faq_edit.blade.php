@extends('admin.layouts.app')

@section('heading','Modification de FAQ ')

@section('Button')
        <a href="{{Route('Admin_FAQ')}}" class="btn btn-primary"><i class="fas fa-eye"></i> Tous Les FAQ </a>
@endsection

@section('main_content')

<div class="section-body ">
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{Route('Admin_FAQ_Update',['id'=>$FAQ_Data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                               
                                <div class="mb-4">
                                    <label class="form-label">Question</label>
                                    <input type="text" class="form-control @error('question') is-invalid @enderror" name="question" value="{{$FAQ_Data->question}}">
                                    
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Reponse </label>
                                    <textarea class="form-control snote @error('reponse') is-invalid @enderror" name="reponse" ></textarea>
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