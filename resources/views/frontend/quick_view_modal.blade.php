<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="quick-style" id="exampleModalLongTitle"><b>{{$product->title}}</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <section class="lolo">
                    <div class="col">
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <img src="{{uploaded_asset($product->image)}}" class="quick-img" alt="product image"/>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="row">
                                    <div class="col mb-3">
                                        <h5 class="quick-style-two" id="exampleModalLongTitle">{{$product->title}}</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <p>Start From</p>
                                        <p class="quick-color"><span>₹ </span>{{$product->price}}<span>.00</span></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="call-us">
                                        <a href="tel:+91-9451075410"><i class="fa fa-phone"></i>+91-9451075410</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="modal-footer btn-box">
                <a href="product-details/{{$product->slug}}" class="theme-btn-one">View Details</a>
            </div>
        </div>
    </div>
</div>