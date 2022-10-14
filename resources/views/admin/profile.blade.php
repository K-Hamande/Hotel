@extends('admin.layouts.app')

@section('heading','Profile')

@section('main_content')


<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
            
    </div>
                    <form action="{{Route('Edit_Profile_Submit')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <img src=" {{Vite::asset('resources/uploads/'.Auth::guard('admin')->user()->Photo) }} " alt="" class="profile-photo w_100_p">
                                <input type="file" class="form-control mt_10" name="photo" >
                            </div>
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Nom <span class="alert text-danger">*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::guard('admin')->user()->Nom }}">

                                </div>
                                <div class="mb-4">
                                    <label class="form-label @error('email') is-invalid @enderror ">Email *</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::guard('admin')->user()->email}}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Mot De Passe</label>
                                    <input type="password" class="form-control @error('new_password') is-invalid @enderror " name="new_password">

                                </div>

                                <div class="mb-4">
                                    <label class="form-label">Confirmation du Mot de Dasse </label>
                                    <input type="password" class="form-control  @error('retype_password') is-invalid @enderror" name="retype_password">

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

