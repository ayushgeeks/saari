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
                        <h1>About Us</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- about-style-two -->
        <section class="about-style-two">
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_2">
                            <div class="image-box">
                               <img src="{{ asset('frontend_css/assets/images/about.jpg')}}" alt="Fabric India">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_3">
                            <div class="content-box">
                                <div class="sec-title">
                                    <p style="text-align:left;">About Company</p>
                                    <h2>Fabric India</h2>
                                    <div class="lte-heading-right"></div>
                                </div>
                                <div class="text gap">
                                     <p>We are a Home Grown Brand and we started this to Manufacture, Produce & Showcase the best that India has to offer in the Saree world. We are a Fashion brand with a Moral Compass and are dedicated to provide you with a mixture of Traditional & Contemporary products which cater to all ages.</p>
                                </div>

                            </div>
                        </div>
                    </div><br>
                    <div class="col-lg-12 col-md-12 col-sm-12 gap">
                        <p>"Empowering Elegance, Inspiring Diversity: Our Vision is to Seamlessly Weave Traditional Artistry with Contemporary Flair, Celebrating Every Woman's Unique Expression through Exceptional Ethnic Fashion."</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-style-two end -->


        <!-- experience-section -->
        <section class="experience-section alternat-2 bg-color-3">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-xs-6 col-md-12 col-sm-12 single-column">
                        <div class="single-item">
                            <div class="inner-box">
                                <div class="progress-box">
                                    <div class="piechart"  data-fg-color="red" data-value=".99">
                                        <span>.99</span>
                                    </div>
                                    <div class="content-box">
                                    <h2>Saticfied Clients</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6 col-md-12 col-sm-12 single-column">
                        <div class="single-item">
                            <div class="inner-box">
                                <div class="progress-box">
                                    <div class="piechart"  data-fg-color="red" data-value=".93">
                                        <span>.93</span>
                                    </div>
                                    <div class="content-box">
                                    <h2>Quality Services</h2>
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6 col-md-12 col-sm-12 single-column">
                        <div class="single-item">
                            <div class="inner-box">
                                <div class="progress-box">
                                    <div class="piechart"  data-fg-color="red" data-value=".59">
                                        <span>.59</span>
                                    </div>
                                    <div class="content-box">
                                    <h2>Transportations</h2>
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6 col-md-12 col-sm-12 single-column">
                        <div class="single-item">
                            <div class="inner-box">
                                <div class="progress-box">
                                    <div class="piechart"  data-fg-color="red" data-value=".85">
                                        <span>.85</span>
                                    </div>
                                    <div class="content-box">
                                    <h2>Awards Winning</h2>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- experience-section end -->


        <!-- team-section -->
        <!--<section class="team-section">-->
        <!--    <div class="auto-container">-->
        <!--        <div class="sec-title centred">-->
        <!--            <p>Meet Our Team</p>-->
        <!--            <h2>We Have A Professional Team Member</h2>-->
        <!--            <div class="lte-heading"></div>-->
        <!--        </div>-->
        <!--        <div class="row clearfix">-->
        <!--            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 team-block">-->
        <!--                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">-->
        <!--                    <div class="inner-box">-->
        <!--                        <figure class="image-box">-->
        <!--                            <img src="{{ asset('frontend_css/assets/images/sub-major-rama-prasad.jpg')}}" alt="Fabric India">-->
        <!--                        </figure>-->
        <!--                        <div class="lower-content">-->
        <!--                            <h5><a href="{{route('index')}}">Sub/Major Rama Prasad</a></h5>-->
        <!--                            <span class="designation">Co-Founder</span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 team-block">-->
        <!--                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">-->
        <!--                    <div class="inner-box">-->
        <!--                        <figure class="image-box">-->
        <!--                            <img src="{{ asset('frontend_css/assets/images/devendra-kushwaha.jpg')}}" alt="Fabric India">-->

        <!--                        </figure>-->
        <!--                        <div class="lower-content">-->
        <!--                            <h5><a href="{{route('index')}}">Er. Devendra Kushwaha</a></h5>-->
        <!--                            <span class="designation">M.Tech in Pipeline Engineering</span>-->
        <!--                            <span>Proprietor of Triupati Enterprises</span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 team-block">-->
        <!--                <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">-->
        <!--                    <div class="inner-box">-->
        <!--                        <figure class="image-box">-->
        <!--                            <img src="{{ asset('frontend_css/assets/images/priyanka-maurya.jpg')}}" alt="Fabric India">-->
        <!--                        </figure>-->
        <!--                        <div class="lower-content">-->
        <!--                            <h5><a href="{{route('index')}}">Er. Priyanka Maurya</a></h5>-->
        <!--                            <span class="designation">B.Tech(Computer Science)</span>-->
        <!--                            <span>Proprietor of Triupati Bathware</span>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <!-- team-section end -->


        <!-- testimonial-section -->
        <section class="testimonial-section bg-color-1">
            <div class="image-layer">
                <figure class="image-1"><img src="{{ asset('frontend_css/assets/images/icons/comment-1.png')}}" alt="Fabric India"></figure>
                <figure class="image-2"><img src="{{ asset('frontend_css/assets/images/shape/shape-1.png')}}" alt="Fabric India"></figure>
            </div>
            <div class="auto-container">
                <div class="sec-title centred">
                    <p>Clients Feedback</p>
                    <h2>What Our Customer Say’s About Our Product</h2>
                    <div class="lte-heading"></div>
                </div>
                <div class="single-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">
                                <p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. </p>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                <figure class="author-thumb"><img src="{{ asset('frontend_css/assets/images/resource/testimonial-1.png')}}" alt="Fabric India"></figure>
                                </div>
                                <div class="col-md-10">
                                <h3>Shailesh Gupta <br> <span>Varanasi</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">
                                <p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. </p>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                <figure class="author-thumb"><img src="{{ asset('frontend_css/assets/images/resource/testimonial-1.png')}}" alt="Fabric India"></figure>
                                </div>
                                <div class="col-md-10">
                                <h3>Shailesh Gupta <br> <span>Varanasi</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="text">
                                <p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. </p>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                <figure class="author-thumb"><img src="{{ asset('frontend_css/assets/images/resource/testimonial-1.png')}}" alt="Fabric India"></figure>
                                </div>
                                <div class="col-md-10">
                                <h3>Shailesh Gupta <br> <span>Varanasi</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->


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
 <script src="{{ asset('frontend_css/assets/js/jquery.countTo.js')}}"></script>
 <script src="{{ asset('frontend_css/assets/js/circle-progress.js')}}"></script>
 <script src="{{ asset('frontend_css/assets/js/jquery.nice-select.min.js')}}"></script>

 <!-- main-js -->
 <script src="{{ asset('frontend_css/assets/js/script.js')}}"></script>
</body><!-- End of .page_wrapper -->
</html>
