@extends('front.layouts.app')

@section('heading','Blog')


@section('PageTop')    
<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>@yield('heading')</h2>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-content')

<div class="blog-item">
    <div class="container">
        <div class="row">
            @foreach ($Blog_Display as $Post)

            <div class="col-md-4">
                <div class="inner">
                    <div class="photo">
                        <img src="{{Vite::asset('resources/uploads/Post/').$Post->photo}}" alt="">
                    </div>
                    <div class="text">
                        <h2><a href=" {{Route('Post',['id'=>$Post->id])}} "> {{$Post->titre}} </a></h2>
                        <div class="short-des">
                            <p>
                                {{$Post->mini_contenu}}
                            </p>
                        </div>
                        <div class="button">
                            <a href="{{Route('Post',['id'=>$Post->id])}}" class="btn btn-primary">Voir</a>
                        </div>
                    </div>
                </div>
            </div>
                
            @endforeach
            
        </div>
    </div>
</div>
    
@endsection
    