<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Fabric India | India</title>
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<!-- Fav Icon -->
<link rel="icon" href="{{ asset('frontend_css/assets/images/favicon.ico')}}" type="image/x-icon">
<!-- Stylesheets -->
<link href="{{ asset('frontend_css/assets/css/font-awesome-all.css')}}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/flaticon.css')}}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/owl.css')}}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/animate.css')}}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/color.css')}}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/style.css')}}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/css/responsive.css')}}" rel="stylesheet">
<link href="{{ asset('frontend_css/assets/images/logo-3.png')}}" rel="shortcut icon">
</head>
<!-- page wrapper -->
<body>
    <div class="boxed_wrapper">
        <!-- preloader -->
        <div class="preloader"></div>
        <!-- preloader -->

        <!-- Start header -->
        @include('frontend/include/header')
        <!-- End header -->
        <!-- Page Title -->
        <section class="page-title centred" style="background-image: url({{ asset('frontend_css/assets/images/background/page-title.jpg')}});">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1>Gallery</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- gallery-style-two -->
        <section class="gallery-style-two sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <p>Photo Gallery</p>
                    <h2>Let’s See Our Latest Photo Gallery</h2>
                    <div class="lte-heading"></div>
                </div>
                <div class="row clearfix">
                    @foreach ($gallery as $item)
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6 gallery-block">
                        <div class="gallery-block-two">
                            <div class="inner-box">
                                <figure class="image-box"><img src="public/gallery/{{$item->image}}" alt="Fabric India"></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <div class="icon-box"><a href="public/gallery/{{$item->image}}" class="lightbox-image" data-fancybox="gallery"><i class="fal fa-search"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- gallery-style-two end -->

       <!-- clients-section -->
        <section class="clients-section">
            <div class="auto-container">
                <div class="clients-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                @foreach (App\Models\Logo::where('delete_status', 0)->orderBy('id', 'DESC')->take(12)->get() as $item)
                <figure class="clients-logo-box"><a href="#"><img src="public/logo/{{$item->image}}" alt="Fabric India"></a></figure>
                @endforeach
                </div>
            </div>
        </section>
        <!-- clients-section end -->

     <!-- main-footer -->
     @include('frontend/include/footer')
     <!-- main-footer end -->

     <!--Scroll to top-->
     <button class="scroll-top scroll-to-target" data-target="html">
         <span class="fa fa-arrow-up"></span>
     </button>
 </div>
 <!-- jequery plugins -->
 <script src="{{ asset('frontend_css/assets/js/jquery.js')}}"></script>
 <script src="{{ asset('frontend_css/assets/js/popper.min.js')}}"></script>
 <script src="{{ asset('frontend_css/assets/js/bootstrap.min.js')}}"></script>
 <script src="{{ asset('frontend_css/assets/js/owl.js')}}"></script>
 <script src="{{ asset('frontend_css/assets/js/wow.js')}}"></script>
 <script src="{{ asset('frontend_css/assets/js/validation.js')}}"></script>
 <script src="{{ asset('frontend_css/assets/js/jquery.fancybox.js')}}"></script>
 <script src="{{ asset('frontend_css/assets/js/appear.js')}}"></script>
 <script src="{{ asset('frontend_css/assets/js/scrollbar.js')}}"></script>
 <script src="{{ asset('frontend_css/assets/js/nav-tool.js')}}"></script>
 <script src="{{ asset('frontend_css/assets/js/jquery.paroller.min.js')}}"></script>
 <script src="{{ asset('frontend_css/assets/js/jquery.nice-select.min.js')}}"></script>
 <!-- main-js -->
 <script src="{{ asset('frontend_css/assets/js/script.js')}}"></script>
</body><!-- End of .page_wrapper -->
</html>
