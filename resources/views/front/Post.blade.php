@extends('front.layouts.app')

@section('heading','')


@section('PageTop')    
<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2> {{$Post_Display->titre}} </h2>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-content')

<div class="page-content">
    <div class="container">
        <div class="row justify-content-center">


            <div class="col-lg-8 col-md-12">
                <div class="featured-photo">
                    <img src="{{Vite::asset('resources/uploads/Post/').$Post_Display->photo}}" alt="">
                </div>
                <div class="sub">
                    <div class="item">
                        <b><i class="fa fa-clock-o"></i></b>
                        {{date('d M Y',strtotime($Post_Display->created_at))}}
                    </div>
                    <div class="item">
                        <b><i class="fa fa-eye"></i></b>
                       {{$Post_Display->nombre_de_vue}}
                    </div>
                </div>
                <div class="main-text">
                    <p>
                        {!! $Post_Display->contenu !!}
                    </p>
                    
                </div>
                <div class="share-content">
                    <h2>Partager</h2>
                    <div class="addthis_inline_share_toolbox"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    