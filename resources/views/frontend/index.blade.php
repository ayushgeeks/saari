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
<style>
.list-item li {
    position: relative;
    display: block;
    font-size: 15px;
    margin-bottom: 5px;
    padding-left: 30px;
}
  .list-item li:before {
    position: absolute;
    content: "\f058";
    font-family: 'Font Awesome 5 Pro';
    font-size: 18px;
    left: 0px;
    top: 0px;
    font-weight: 400;
}
 .list-item li:before {
    color: red;
}
</style>
</head>
<!-- page wrapper -->
<body>
    <div class="boxed_wrapper">
        <!-- preloader -->
        <!--<div class="preloader"></div>-->
        <!-- preloader -->

        <!-- Start header -->
        @include('frontend/include/header')
        <!-- End header -->

        <!-- banner-section -->
        <section class="banner-section style-two">
            <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
                @foreach ($slider as $item)
                <div class="slide-item">
                    <img src="public/slider/{{$item->image}}">
                </div>
                @endforeach
            </div>
        </section>
        <!-- banner-section end -->

        <!-- product-section -->
        <section class="product-section">
            <div class="pro-container">
                <div class="sec-title centred">
                    <h2>Explore Our Category</h2>
                    <div class="lte-heading"></div>
                </div>
                <div class="row clearfix mt-25">
                    @php
                    $cat_title=App\Models\ProductCategory::where('delete_status',0)->where('is_home',1)->orderBy('id', 'ASC')->take(8)->get();
                    @endphp
                    @foreach ($cat_title as $key => $items)
                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6 product-block">
                        <div class="prdt-box">
                            <div class="img-box">
                               <a href="{{route('product','id='.$items->id)}}">
                                <img src="public/category/{{$items->image}}" alt="Fabric India">
                               </a>
                            </div>
                            <div class="lower-text cat-txt">
                                <p><a class="cat-color" href="{{route('product','id='.$items->id)}}">{{$items->title}}</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- product-section end -->

        @php
            $pro_title=App\Models\ProductCategory::where('delete_status',0)->where('is_home',1)->orderBy('id', 'ASC')->take(6)->get();
        @endphp
        @foreach ($pro_title as $key => $items)
        <!-- product-section -->
        <section class="product-section">
            <div class="pro-container">
                <div class="row">
                    <div class="col-8">
                        <div class="sec-title">
                            <h2>{{$items->title}}</h2>
                            <div class="lte-heading-right"></div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mt-22 text-right ">
                            <a href="{{route('product','id='.$items->id)}}" class="cell">View All <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    @php
                    $product_list=App\Models\Product::where('category_id',$items->id)->orderBy('id', 'ASC')->take(6)->get()
                    @endphp
                    @foreach ($product_list as $key => $product)
                    <div class="product-block-one">
                        <div class="inner-box">
                        <span class="tag-sale"></span>
                            <figure class="image-box">
                                <img src="{{uploaded_asset($product->image)}}" alt="" onerror="this.onerror=null;this.src='{{ asset('public/category/1706786686.png') }}'">
                                <a href="product-details/{{$product->slug}}"><i class="fas fa-link"></i></a>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-light quick col-md-11" onclick="showQuickView('{{$product->id}}')">Quick View</button>
                            </figure>
                            
                            <div class="lower-content">
                                <div class="text">
                                    <h3><a href="product-details/{{$product->slug}}">{{$product->title}}</a></h3>
                                </div>
                                <div class="price">
                                    <h3><span>₹ </span>{{$product->price}}<span>.00</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                     @endforeach
                </div>
            </div>
        </section>
        <!-- product-section end -->
        @endforeach
        
        <!-- cta-section -->
        <section class="cta-section centred" style="background-image: url({{ asset('frontend_css/assets/images/background/cta-3.jpg')}});">
            <div class="auto-container">
                <div class="inner-box">
                    <div class="video-btn">
                        <a href="#" class="lightbox-image video-btn" data-caption="">
                            <i class="fas fa-play"></i>
                            <span class="border-animation border-1"></span>
                            <span class="border-animation border-2"></span>
                            <span class="border-animation border-3"></span>
                        </a>
                    </div>
                    <p>Get More Update</p>
                    <h2>Need Any Helps For Modern Tiles & Toilet Join Us</h2>
                    <div class="btn-box">
                        <a href="{{route('contact')}}" class="theme-btn-one">Join with us<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-section end -->
        
        <!-- about-section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_1">
                            <div class="image-box">
                                <img src="{{ asset('frontend_css/assets/images/about.jpg')}}" alt="Fabric India">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_1">
                            <div class="content-box">
                                <div class="sec-title">
                                    <p style="text-align:left;">Who We Are?</p>
                                    <h2>Fabric India</h2>
                                    <div class="lte-heading-right"></div>
                                </div>
                                <div class="text">
                                    <p>Welcome to Fabric India, your ultimate destination for the finest Indian ethnic wear for women. We take pride in offering a large selection of exquisite sarees, lehengas, kurta sets for women, suits, and more, all designed to enhance your natural beauty and bring out the essence of Indian traditions.</p>
                                </div>
                                <div class="btn-box">
                                    <a href="{{route('about')}}" class="theme-btn-one">Read more<i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->

        <!-- testimonial-section -->
        <section class="testimonial-section bg-color-1">
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

        

        <!-- Modal -->
        <div id="quick_view_modal"></div>
        <!-- Modal Ends -->

        <!-- testimonial-section end -->

       <!-- clients-section -->
        <!--<section class="clients-section">-->
        <!--    <div class="auto-container">-->
        <!--        <div class="clients-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">-->
        <!--        @foreach (App\Models\Logo::where('delete_status', 0)->orderBy('id', 'DESC')->take(12)->get() as $item)-->
        <!--        <figure class="clients-logo-box"><a href="#"><img src="public/logo/{{$item->image}}" alt="Fabric India"></a></figure>-->
        <!--        @endforeach-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
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

    <script>

    function showQuickView(id){
        $.get("{{route('quick.view.modal','')}}/"+id, function(data, status){
            $('#quick_view_modal').html(data);
            $('#exampleModalCenter').modal('show');
        });
    }

    </script>

</body><!-- End of .page_wrapper -->
</html>
