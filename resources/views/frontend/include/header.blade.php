<!-- main header -->
<header class="main-header style-one">
    <div class="header-top">
        <div class="top-inner centerd">
            <div class="container p-0">
                <div class="row">
                    <div class="col-md-5 p-0">
                        <p>Welcome to Fabric India.</p>
                    </div>
                    <div class="col-md-7 mob-hide">
                        <p><a href="mailto:indianfabric@gmail.com"><i class="far fa-envelope"></i> indianfabric@gmail.com</a> <a href="tel:+91-9919000099"><i class="far fa-phone-volume"></i> +91-9919000099</a> <a href="tel:+91-9451075410"><i class="far fa-phone-volume"></i> +91-9451075410</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-lower -->
    <div class="header-lower">
        <div class="outer-box">
            <div class="logo-box">
                <figure class="logo"><a href="{{route('index')}}"><img src="{{ asset('frontend_css/assets/images/logo-3.png')}}" alt=""></a></figure>
            </div>
            <div class="menu-area">
                <!--Mobile Navigation Toggler-->
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="current"><a href="{{route('index')}}">Home</a>
                            </li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <!--<li><a href="{{route('services')}}">Services</a></li>-->
                            <li class="dropdown"><a href="#">Product</a>
                                <ul>
                                    @php
                                    $cat_title=App\Models\ProductCategory::where('delete_status',0)->orderBy('id', 'ASC')->get();
                                    @endphp
                                    @foreach ($cat_title as $key => $items)
                                    <li><a href="{{route('product','id='.$items->id)}}">{{$items->title}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{route('gallery')}}">Gallery</a></li>
                            <!--<li><a href="{{route('our_project')}}">Our Project</a></li>-->
                            <!--<li><a href="{{route('award_and_certificate')}}">Our Award</a></li>-->
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="nav-right-content">
                <div class="btn-box"><a href="{{route('contact')}}">Get a quote<i class="far fa-long-arrow-right"></i></a></div>
                <div class="nav-box">
                    <button class="mobile-nav-toggler"><i class="flaticon-menu"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="outer-box">
            <div class="logo-box">
                <figure class="logo"><a href="{{route('index')}}"><img src="{{ asset('frontend_css/assets/images/logo-3.png')}}" alt=""></a></figure>
            </div>
            <div class="menu-area">
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
            </div>
            <div class="nav-right-content">
                <div class="btn-box"><a href="{{route('contact')}}">Get a quote<i class="far fa-long-arrow-right"></i></a></div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->


<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="{{route('index')}}"><img src="{{ asset('frontend_css/assets/images/logo-3.png')}}" alt="" title=""></a></div>
        <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>D 28, 119-A, Pandey Haveli Rd, Madanpura, Ramapura Luxa, Varanasi, Uttar Pradesh 221001</li>
                <li><a href="tel:+91-9451075410">+91-9451075410</a></li>
                <li><a href="mailto:indianfabric@gmail.com">indianfabric@gmail.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->
