@extends('front.layouts.app')

@section('page-content')

<div class="slider">
    <div class="slide-carousel owl-carousel">

@foreach ($Slide_Display as $Values)
        
        <div class="item" style="background-image:url({{Vite::asset('resources/uploads/Slide/'.$Values->photo)}})">
            <div class="text">
                @if (isset($Values->heading))
                    <h2>{{$Values->heading}}</h2>
                @else
                    
                @endif
                <p>
                    @if (isset($Values->text))
                        {{$Values->text}}
                    @endif
                </p>
                
                        @if (isset($Values->button_text))
                    <div class="button">
                            <a href="">
                         {{$Values->button_text}}
                        </a>
                    </div>
                        @else
                        @endif
                       
                
            </div>
        </div>
   
        @endforeach
    </div>
</div>

</div>
     
 
<div class="search-section">
    <div class="container">
        <form action="cart.html" method="post">
        <div class="inner">
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <select name="" class="form-select">
                            <option value="">Select Room</option>
                            <option value="">Standard Couple Bed Room</option>
                            <option value="">Delux Couple Bed Room</option>
                            <option value="">Standard Four Bed Room</option>
                            <option value="">Delux Four Bed Room</option>
                            <option value="">VIP Special Room</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <input type="text" name="checkin_checkout" class="form-control daterange1" placeholder="Checkin & Checkout">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <input type="number" name="" class="form-control" min="1" max="30" placeholder="Adults">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <input type="number" name="" class="form-control" min="1" max="30" placeholder="Children">
                    </div>
                </div>
                <div class="col-lg-2">
                    <button type="submit" class="btn btn-primary">Book Now</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>

<div class="home-feature">
    <div class="container">
        <div class="row">
            @foreach ($Feature_Display as $Values)

            <div class="col-md-3">
                <div class="inner">
                    <div class="icon"><i class="{{$Values->icons}}"></i></div>
                    <div class="text">
                        <h2>  {{$Values->heading}}</h2>
                        <p>
                             {{$Values->text}}
                        </p>
                    </div>
                </div>
            </div>
                
            @endforeach
        </div>
    </div>
</div>



<div class="home-rooms">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-header">Rooms and Suites</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="inner">
                    <div class="photo">

                        
                        <img src="{{Vite::asset('resources/uploads/1.jpg')}}" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="">Standard Couple Bed</a></h2>
                        <div class="price">
                            $100/night
                        </div>
                        <div class="button">
                            <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="photo">
                        <img src="{{Vite::asset('resources/uploads/2.jpg')}}" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="">Standard Couple Bed</a></h2>
                        <div class="price">
                            $100/night
                        </div>
                        <div class="button">
                            <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="photo">
                        <img src="{{Vite::asset('resources/uploads/3.jpg')}}" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="">Standard Couple Bed</a></h2>
                        <div class="price">
                            $100/night
                        </div>
                        <div class="button">
                            <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="photo">
                        <img src="{{Vite::asset('resources/uploads/4.jpg')}}" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="">Standard Couple Bed</a></h2>
                        <div class="price">
                            $100/night
                        </div>
                        <div class="button">
                            <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="photo">
                        <img src="{{Vite::asset('resources/uploads/5.jpg')}}" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="">Standard Couple Bed</a></h2>
                        <div class="price">
                            $100/night
                        </div>
                        <div class="button">
                            <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="photo">
                        <img src="{{Vite::asset('resources/uploads/6.jpg')}}" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="">Standard Couple Bed</a></h2>
                        <div class="price">
                            $100/night
                        </div>
                        <div class="button">
                            <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="photo">
                        <img src=" {{Vite::asset('resources/uploads/7.jpg')}}" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="">Standard Couple Bed</a></h2>
                        <div class="price">
                            $100/night
                        </div>
                        <div class="button">
                            <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="inner">
                    <div class="photo">
                        <img src=" {{Vite::asset('resources/uploads/1.jpg')}}" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="">Standard Couple Bed</a></h2>
                        <div class="price">
                            $100/night
                        </div>
                        <div class="button">
                            <a href="room-detail.html" class="btn btn-primary">See Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="big-button">
                    <a href="" class="btn btn-primary">See All Rooms</a>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="testimonial" style="background-image:url({{Vite::Asset('resources/uploads/slide2.jpg')}})">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-header">Nos Client Satisfait</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-carousel owl-carousel">
                    @foreach ($Testimonial_Display as $Values)
                    <div class="item">
                <div class="photo">
                    <img src=" {{Vite::asset('resources/uploads/Testimonial/').$Values->photo}}" alt="">
                </div>
                <div class="text">
                    <h4>{{ $Values->nom }}</h4>
                    <p> {{ $Values->designation }} </p>
                </div>
                <div class="description">
                    <p>
                    {{ $Values->commentaire}}
                    </p>
                </div>
            </div>
                    
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>




<div class="blog-item">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="main-header">Latest Posts</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="inner">
                    <div class="photo">
                        <img src=" {{Vite::asset('resources/uploads/1.jpg')}}" alt="">
                    </div>
                    
                    <div class="text">
                        <h2><a href="post.html">This is a sample blog post title</a></h2>
                        <div class="short-des">
                            <p>
                                If you want to get some good contents from the people of your country then just contribute into the main community of your people and I am sure you will be benfitted from that. 
                            </p>
                        </div>
                        <div class="button">
                            <a href="post.html" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="inner">
                    <div class="photo">
                        <img src="{{Vite::asset('resources/uploads/2.jpg')}}" alt="">
                    </div>
                    <div class="text">
                        <h2><a href="post.html">This is a sample blog post title</a></h2>
                        <div class="short-des">
                            <p>
                                If you want to get some good contents from the people of your country then just contribute into the main community of your people and I am sure you will be benfitted from that. 
                            </p>
                        </div>
                        <div class="button">
                            <a href="post.html" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="inner">
                    <div class="photo">
                        <img src="{{Vite::asset('resources/uploads/3.jpg')}}" alt="">
                    </div>
                   
                    <div class="text">
                        <h2><a href="post.html">This is a sample blog post title</a></h2>
                        <div class="short-des">
                            <p>
                                If you want to get some good contents from the people of your country then just contribute into the main community of your people and I am sure you will be benfitted from that. 
                            </p>
                        </div>
                        <div class="button">
                            <a href="post.html" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection