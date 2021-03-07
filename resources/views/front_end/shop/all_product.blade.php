@extends('front_end.master')
@section('title')
    Medicin || Shop
@endsection
	<!-- Bootstrap -->
	<link href="{{asset('/front_end/shop/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<!-- Fontawesome -->
	<link href="{{asset('/front_end/shop/assets/css/font-awesome.css')}}" rel="stylesheet">
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
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
				<h2>Medicin Shop</h2>
			</div>
		</div>
	</div>
	<!-- breadcrumb -->
	</div>
	
	<!--product Start-->
	<section class="section-padding our-product bg-light-theme">
		<div class="container-fluid custom-container">
			<div class="row">
				<div class="col-xl-3 col-lg-4">
					<div class="side-bar mb-md-40">
						<div class="main-box padding-20 trending-blog-cat mb-xl-20">
							<h5 class="text-theme-primary fw-600">Price</h5>
							<div class="delivery-slider">
								<input type="text" class="delivery-range-slider" value="" />
							</div>
						</div>

						<div class="main-box padding-20 trending-blog-cat mb-xl-20">
							<h5 class="text-theme-primary fw-600">Medicin Categories</h5>
							<ul>
								<li class="pb-xl-20 u-line mb-xl-20">
									<a href="{{route('shop_page')}}" class="text-light-black fw-600">
										All Medicins
										<span class="text-light-white fw-400">(110)</span>
									</a>
								</li>
								@foreach($medicin_categories as $medicin_category)
									<li class="pb-xl-20 u-line mb-xl-20">
										<a href="{{route('category_medicin_page',['category_id'=>$medicin_category->id])}}" class="text-light-black fw-600">
											{{$medicin_category->medicin_category_name}}
											<span class="text-light-white fw-400">(110)</span>
										</a>
									</li>
								@endforeach
							</ul>
						</div>

						<div class="main-box padding-20 trending-blog-cat mb-xl-20">
							<h5 class="text-theme-primary fw-600">Product Category</h5>
							<ul>
								<li class="pb-xl-20 u-line mb-xl-20">
									<a href="{{route('all_product_page')}}" class="text-light-black fw-600">
										All Products
										<span class="text-light-white fw-400">(110)</span>
									</a>
								</li>
								@foreach($product_categories as $product_category)
									<li class="pb-xl-20 u-line mb-xl-20">
										<a href="{{route('category_product_page',['category_id'=>$product_category->product_id])}}" class="text-light-black fw-600">
											{{$product_category->product_category_name}}
											<span class="text-light-white fw-400">(110)</span>
										</a>
									</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-9 col-lg-8">
					<div class="full-width">
						<div class="row">

							@foreach($all_medicins as $medicin)
							<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
								<div class="product-box mb-md-20">
									<div class="product-img">
										<a href="{{route('medicin_detils_page',['medicin_id'=>$medicin->medicin_id])}}">
											<img src="{{asset($medicin->medicin_image)}}" class="img-fluid full-width default-img" alt="product-img" style="height: 250px;width:350px">
											<img src="{{asset($medicin->medicin_image)}}" class="img-fluid full-width hover-img" alt="product-img" style="height: 250px;width:350px">
										</a>
										<div class="product-badge">
											<div class="product-label new"> <span>New</span>
											</div>
										</div>
										{{-- <div class="button-group"> <a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist" tabindex="-1"></a>
											<a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick View"><i class="fa fa-heart"></i></span></a>
										</div> --}}
									</div>
									<div class="product-caption text-center">
										<h6 class="product-title fw-600 mt-0"><a href="{{route('medicin_detils_page',['medicin_id'=>$medicin->medicin_id])}}" class="text-color-primary">{{$medicin->medicin_name}}</a></h6>
										<div class="ratings">
											{{-- <span class="star-rating">
												<i class="fas fa-star" aria-hidden="true"></i>
												<i class="fas fa-star" aria-hidden="true"></i>
												<i class="fas fa-star" aria-hidden="true"></i>
												<i class="fas fa-star" aria-hidden="true"></i>
												<i class="fas fa-star" aria-hidden="true"></i>
											</span> --}}
										</div>
										<div class="product-money mt-10"> <span class="text-color-primary fw-600 fs-16">{{$medicin->medicin_price}}৳</span>
											{{-- <span class="text-price">$250.00</span> --}}
										</div>
										<div class="cart-hover">
											<a href="{{route('medicin_detils_page',['medicin_id'=>$medicin->medicin_id])}}" class="btn-cart  fw-600" tabindex="-1">Add To Cart</a>
										</div>
									</div>
								</div>
							</div>
							@endforeach
								</div>
							</div>
						</div>
					</div>
					<div class="custom-pagination align-item-center">
						<nav aria-label="Page navigation example">
							<ul class="pagination">
								<li class="page-item">
									<a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true">«</span>
										<span class="sr-only">Previous</span>
									</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">1</a>
								</li>
								<li class="page-item active"><a class="page-link" href="#">2</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">3</a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">»</span>
										<span class="sr-only">Next</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!--Product-end-->
    
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