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
                        <h1>Contact Us</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- contact-section -->
        <section class="contact-section">
            <div class="auto-container">
                <div class="contact-info-area centred">
                    <div class="row clearfix">
                        <div class="col-md-4 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="icon-box"><i class="far fa-map-marker-alt"></i></div>
                                <h5>Main Address</h5>
                                <p>D 28, 119-A, Pandey Haveli Rd, Madanpura, Ramapura Luxa, Varanasi, Uttar Pradesh 221001</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="icon-box"><i class="far fa-envelope-open"></i></div>
                                <h5>Email Address</h5>
                                <p><a href="mailto:indianfabric@gmail.com">indianfabric@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="icon-box"><i class="far fa-phone"></i></div>
                                <h5>Phone Us</h5>
                                <p><a href="tel:+91-9451075410">+91-9451075410</a><br />
                                   <a href="tel:+91-9919000099">+91-9919000099</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- google-map-section -->
        <section class="google-map-section">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="map-inner">
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe width="570" height="451" id="gmap_canvas" src="https://maps.google.com/maps?q=D+28%2C+119-A%2C+Pandey+Haveli+Rd%2C+Madanpura%2C+Ramapura+Luxa%2C+Varanasi%2C+Uttar+Pradesh+221001&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                    <a href="https://textcaseconvert.com/"></a><br><a href="https://www.tabclocktab.com/">clock tab</a><br>
                                    <style>.mapouter{position: relative;text-align: right;height: 451px;width: 570px;}</style>
                                    <a href="https://www.ongooglemaps.com">google maps embed</a>
                                    <style>.gmap_canvas{overflow: hidden;background: none !important;height: 451px;width: 570px;}</style>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 contact-section ">
                        <div class="contact-form-area">
                            @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                    <strong>Success!</strong> {{ $message }}
                                    </div>
                            @endif
                            <form method="post" action="{{route('enquiry.store')}}" class="default-form">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-md-12 col-sm-12 form-group">
                                        <label>Full Name</label>
                                        <input type="text" name="name" placeholder="Write Your Name" required="">
                                    </div>
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" placeholder="Write Your Email" required="">
                                    </div>
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone" required="" placeholder="Phone Number">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label>Write Your Message</label>
                                        <textarea name="message" placeholder="Write Message"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button class="theme-btn-one" type="submit" name="submit">Submit <i class="far fa-long-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->

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
