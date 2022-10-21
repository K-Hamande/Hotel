<div class="navbar-area" id="stickymenu">

    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="{{Route('Home')}}" class="logo">
            <img src="{{Vite::asset('resources/uploads/logo.png')}} " alt="">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{Route('Home')}}">
                    <img src="{{Vite::asset('resources/uploads/logo.png')}} " alt="">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">        
                        <li class="nav-item">
                            <a href="{{Route('Home')}}" class="nav-link">Home</a>
                        </li>

                        @if($About_Display->statu_About == 1 )
                            <li class="nav-item">
                                <a href="{{Route('About_Home')}}" class="nav-link"> {{ $About_Display->titre }}  </a>
                            </li>
                        @endif
                        
                        <li class="nav-item">
                            <a href="javascript:void;" class="nav-link dropdown-toggle">Room & Suite</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="room-detail.html" class="nav-link">Regular Couple Bed</a>
                                </li>
                                <li class="nav-item">
                                    <a href="room-detail.html" class="nav-link">Delux Couple Bed</a>
                                </li>
                                <li class="nav-item">
                                    <a href="room-detail.html" class="nav-link">Regular Double Bed</a>
                                </li>
                                <li class="nav-item">
                                    <a href="room-detail.html" class="nav-link">Delux Double Bed</a>
                                </li>
                                <li class="nav-item">
                                    <a href="room-detail.html" class="nav-link">Premium Suite</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                                <li class="nav-item">
                                    <a href="{{Route('Photo_Home')}}" class="nav-link">Gallerie Photo</a>
                                </li>
                        </li>
                        <li class="nav-item">
                            <a href="{{Route('Blog_Home')}}" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>