<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
        <meta name="description" content="">
        <title>Hotel</title>        
		
        <link rel="icon" type="image/png" href="{{Vite::asset('resources/uploads/favicon.png')}}">

@include('front.layouts.styles')


@include('front.layouts.scripts')
       
        <!-- Google Analytics -->
        <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-84213520-6"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-84213520-6');
        </script> -->

    </head>
    <body>
        
        @include('front.layouts.top')





        @include('front.layouts.navbar')


        <div class="page-top">
            <div class="bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>@yield('heading')</h2>
                    </div>
                </div>
            </div>
        </div>


        @yield('page-content')


        @include('front.layouts.footer')

        <div class="copyright">
            Copyright 2022, ArefinDev. All Rights Reserved.
        </div>
     
        <div class="scroll-top">
            <i class="fa fa-angle-up"></i>
        </div>
		
        @include('front.layouts.scripts_footer')       
        
		
   </body>
</html>