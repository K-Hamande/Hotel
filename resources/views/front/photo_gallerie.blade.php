@extends('front.layouts.app')

@section('heading','Gallerie Photos')


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

<div class="page-content">
    <div class="container">
        <div class="photo-gallery">
            <div class="row">
            @foreach ($Photo_Display as $Photo)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="photo-thumb">
                                    <img src="{{Vite::asset('resources/uploads/Galeries/').$Photo->photo}}" alt="">
                                    <div class="bg"></div>
                                    <div class="icon">
                                        <a href="{{Vite::asset('resources/uploads/Galeries/').$Photo->photo}}" class="magnific"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                                <div class="photo-caption">
                                    {!! $Photo->legende !!}
                                </div>
                            </div>
                        
            @endforeach
        </div>
        </div>
    </div>
</div>
    
@endsection
    