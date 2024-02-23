<footer class="main-footer footer-bg">
    <div class="auto-container">
        <div class="widget-section">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-12 footer-column">
                    <div class="footer-widget about-widget">
                        <div class="widget-title">
                            <h3>About Us</h3>
                        </div>
                        <div class="text">
                            <p>Since the inception in the year 2000, Fabric India has been continuously growing its brand as multi-diversified home building solutions.</p>
                        </div>
                        <ul class="social-links clearfix">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 column">
                    <div class="footer-widget links-widget ml-70">
                        <div class="widget-title">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><i class="far fa-angle-right"></i> <a href="{{route('gallery')}}">Gallery</a></li>
                                <li><i class="far fa-angle-right"></i> <a href="{{route('about')}}">About Us</a></li>
                                <li><i class="far fa-angle-right"></i> <a href="{{route('contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 column">
                    <div class="footer-widget links-widget ml-70">
                        <div class="widget-title">
                            <h3>Our Product</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                            @php
                            $cat_title=App\Models\ProductCategory::where('delete_status',0)->orderBy('id', 'ASC')->take(6)->get();
                            @endphp
                            @foreach ($cat_title as $key => $items)
                            <li><i class="far fa-angle-right"></i> <a href="{{route('product','id='.$items->id)}}">{{$items->title}}</a></li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-36 col-sm-12 column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h3>Contact Us</h3>
                        </div>
                        <ul class="info-list clearfix">
                            <li><i class="far fa-phone-volume"></i><a href="tel:+91-9451075410">+91-9451075410</a></li>
                            <li><i class="far fa-envelope-open"></i><a href="mailto:indianfabric@gmail.com">indianfabric@gmail.com</a></li>
                            <li><i class="far fa-map-marker-alt"></i>D 28, 119-A, Pandey Haveli Rd, Madanpura, Ramapura Luxa, Varanasi, Uttar Pradesh 221001</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom centred">
            <p>&copy;2024 Fabric India - All Rights Reserved. <a href="https://www.techuptechnologies.com/">Techup Technologies</a></p>
        </div>
    </div>
</footer>
