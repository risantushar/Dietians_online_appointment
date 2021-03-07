@extends('front_end.master')
@section('title')
    Product || Details
@endsection
	<!-- Bootstrap -->
	<link href="{{asset('/front_end/shop/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<!-- Fontawesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
	<!-- Flaticons -->
	<link href="{{asset('/front_end/shop/assets/css/font/flaticon.css')}}" rel="stylesheet">
	<!-- Swiper Slider -->
	<link href="{{asset('/front_end/shop/assets/css/swiper.min.css')}}" rel="stylesheet">
	<!-- Pe-icons -->
	<link href="{{asset('/front_end/shop/assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet">
	<!-- Range Slider -->
	<link href="{{asset('/front_end/shop/assets/css/ion.rangeSlider.min.css')}}" rel="stylesheet">
	<!-- magnific popup -->
	<link href="{{asset('/front_end/shop/assets/css/magnific-popup.css')}}" rel="stylesheet">
	<!-- Nice Select -->
	<link href="{{asset('/front_end/shop/assets/css/nice-select.css')}}" rel="stylesheet">
	<!-- Custom Stylesheet -->
	<link href="{{asset('/front_end/shop/assets/css/style.css')}}" rel="stylesheet">
	<!-- Custom Responsive -->
	<link href="{{asset('/front_end/shop/assets/css/responsive.css')}}" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Ralmedseky:100,200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
@section('body')
<div class="container">
    <!-- breadcrumb -->
        <div class="breadcrumb-area">
            <div class="overlay overlay-bg" style="background-image: url('/front_end/shop/assets/images/shopbg.jpg')"></div>
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Product Details</h2>
                </div>
            </div>
        </div>
        <!-- breadcrumb -->
        </div>
        
<section class="section-padding  bg-light-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="shop-detail-image">
                    <div class="detail-slider">
                        <div class="swiper-container gallery-top swiper-container-initialized swiper-container-horizontal">
                            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                <div class="swiper-slide swiper-slide-active" style="width: 510px; margin-right: 15px;">
                                    <a href="#" class="popup">
                                        <img src="{{asset($product_details->product_image)}}" class="img-fluid full-width" alt="slider">
                                    </a>
                                    <div class="shop-type-tag"> <a href="#" class="bg-custom-black type-tag">Sale</a>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" style="width: 510px; margin-right: 15px;">
                                    <a href="#" class="popup">
                                        <img src="{{asset($product_details->product_image)}}" class="img-fluid full-width" alt="slider">
                                    </a>
                                    <div class="shop-type-tag"> <a href="#" class="bg-custom-black type-tag">Sale</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <!-- Add Arrows -->
                            <div class="swiper-button-next swiper-button-white" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"></div>
                            <div class="swiper-button-prev swiper-button-white swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <div class="swiper-container gallery-thumbs swiper-container-initialized swiper-container-horizontal swiper-container-free-mode swiper-container-thumbs">
                         
                            <!-- Add Arrows --> <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="shop-detail-contents mb-md-40 mt-md-40">
                    <div class="shop-detail-content-wrapper">
                        <h3 class="text-theme-primary price-tag">{{$product_details->product_name}}</h3>
                    </div>
                    {{-- <div class="ratings d-flex mb-xl-20"> <span class="text-yellow"><i class="fas fa-star"></i></span>
                        <span class="text-yellow"><i class="fa fa-star"></i></span>
                        <span class="text-yellow"><i class="fa fa-star"></i></span>
                        <span class="text-dark-white"><i class="fa fa-star"></i></span>
                        <span class="text-dark-white"><i class="fa fa-star"></i></span>
                        <div class="pro-review"> <span>1 Reviews</span>
                        </div>
                    </div> --}}
                    <div class="price">
                        <h4 class="text-custome-black">Product Price: <span class="text-light-white fw-400 fs-16">{{$product_details->product_price}} ৳</span></h4>
                    </div>
                    <div class="product-full-des mb-20 mt-20">
                        <h3>Product Description</h3>
                    </div>
                    <div class="product-full-des mb-20">
                       
                        <p class="mb-0">{{$product_details->product_description}}</p>
                    </div>
                    {{-- <div class="availibity mt-20">
                        <p class="text-custom-black fw-600">Avability: <span class="text-success ml-2">In Stock</span></p>
                    </div> --}}
                    <form action="{{route('add_to_cart')}}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" id="" value="{{$product_details->product_id}}">
                    <div class="quantity mb-xl-20">
                        <p class="text-custom-black mb-0 mr-2 fw-600">Qty:</p>
                        <div class="product-qty-input">
                            <button class="minus-btn" type="button" name="button"> <i class="fas fa-minus"></i>
                            </button>
                            <input type="text" class="form-control form-control-qty text-center" name="quantity" value="1">
                            <button class="plus-btn" type="button" name="button"> <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                
                    <div class="shop-bottom">
                        <div class="shop-meta mt-20">
                            <p class="text-custom-black mb-0 fw-600">Categories:</p>
                            <ul class="list-inline ml-2">
                                @php
                                    $productCategoryName=DB::table('product_categories')
                                    ->where('product_id',$product_details->product_category_id)
                                    ->first();
                                @endphp
                                <li class="list-inline-item"><a>{{$productCategoryName->product_category_name}}</a>
                                </li>
                            </ul>
                        </div>
                      
                        <div class="product-btn mt-20">
                            <button type="submit" class="btn-solid with-line ml-2">Add to Cart </button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- jQuery -->
 <script src="{{asset('/front_end/shop/assets/js/jquery.min.js')}}"></script>
 <!-- Popper -->
 <script src="{{asset('/front_end/shop/assets/js/popper.min.js')}}"></script>
 <!-- Bootstrap -->
 <script src="{{asset('/front_end/shop/assets/js/bootstrap.min.js')}}"></script>
 <!-- Range Slider -->
 <script src="{{asset('/front_end/shop/assets/js/ion.rangeSlider.min.js')}}"></script>
 <!-- Swiper Slider -->
 <script src="{{asset('/front_end/shop/assets/js/swiper.min.js')}}"></script>
 <!-- Nice Select -->
 <script src="{{asset('/front_end/shop/assets/js/jquery.nice-select.min.js')}}"></script>
 <!-- magnific popup -->
 <script src="{{asset('/front_end/shop/assets/js/jquery.magnific-popup.min.js')}}"></script>
 <!-- Maps -->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
 <!-- sticky sidebar -->

 <!-- medsek Js -->
 <script src="{{asset('/front_end/shop/assets/js/main.js')}}"></script>
@endsection