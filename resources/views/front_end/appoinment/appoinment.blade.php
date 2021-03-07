@extends('front_end.master')
@section('title')
Appointment || Form
@endsection
@section('body')
    	<!-- Main Gray Content Background -->
		<div class="gray-content-background">
			<div class="container">
				<div class="row">
					<div class="span12">
                        @if(session('appointment_success'))
                        <div class="alert alert-success">
                            {{session('appointment_success')}}
                        </div>
                    @elseif(session('appointment_error'))
                        <div class="alert alert-danger">
                            {{session('appointment_error')}}
                        </div>
                    @endif
						<div class="main-content-box">
							<h1> Request a consultation</h1>
							<div class="row">
								<div class="span12 " style="padding-left: 10px">
									<div class="contact-form-box general-form">
										<form action="{{route('appointment_submit')}}" method="POST">
                                            @csrf
											<fieldset>
												<label for="cf-name">Name <span>*</span> : </label>
                                                <input name="customer_name" id="customer_name" type="text" placeholder="Enter your name">
                                                
												<label>Email <span>*</span><span class="not-published"> (will not be published) </span></label>
												<input name="customer_email" id="customer_email" type="text" placeholder="Enter your email">

												<label>Phone <span>*</span></label>
												<input name="customer_mobile" id="customer_mobile" type="number" placeholder="Mobile number" value="880">

												<label>Health Interest <span>*</span></label>
												<div class="btn-group">
													<div class="input-group mb-3">
                                                        <select class="custom-select" id="inputGroupSelect02" required>
                                                          <option selected>Choose...</option>
                                                          <option value="I want to get fat">I want to get fat</option>
                                                          <option value="I want to maintain">I want to maintain</option>
                                                          <option value="I want to loose fat">I want to loose fat</option>
                                                        </select>
                                                      </div>
												</div>
												<label>Preferred Time<span>*</span></label>
												<div class="md-form">
                                                    <input type="time" id="app_time" name="app_time" min="09:00" max="20:00" required>
                                                </div>

												<label>Preferred Date <span>*</span></label>
												<input type="date" id="app_date" name="app_date" required>
												
												<label>Appointment Fee <span>*</span></label>
                                                <input value="600" readonly type="number" id="app_fee" name="app_fee" required>

												<label>Additional Comments <span>*</span> :</label>
												<textarea name="customer_comment" rows="9"></textarea>

												<button type="submit" class="btn btn-primary" style="padding-left: 10px">
													Send request to Programming Department <i class="icon"></i>
                                                </button>
											</fieldset>
										</form>
									</div>
								</div>

							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="span4">
						<div class="main-sidebar">
							<div class="sidebar-menu">
								<ul class="nav nav-list">
									<li>
										<a href="diet-nutrition-services.html">Diet & Nutrition Services</a>

									</li>
									<li>
										<a href="before-after.html">Before / After </a>
									</li>
									<li>
										<a href="our-team.html">Our Team </a>
									</li>
									<li>
										<a href="recipes-book.html">Recipes Book</a>
									</li>
									<li>
										<a href="pages-pricing.html">Pages</a>
									</li>
									<li class="active">
										<a href="contact-request-consultation.html">Contact</a>
										<ul class="nav-submenu">
											<li class="active-submenu">
												<span class="left-white-arrow"></span><a href="contact-request-consultation.html">Request a consultation</a>
											</li>
											<li>
												<a href="contact-where-you-can-find-us.html">Where you can find us</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>

						<!-- Slider Widget -->
						<div class="slider-widget sidebar-widget">
							<div id="dn-top-widget-slider" class="owl-carousel">
								<div class="item">
									<h2>Success Stories</h2>
									<h3>Jessica</h3>
									<div class="before-picture">
										<img src="assets/before-picture.png" alt="before"/>
									</div>
									<div class="after-picture">
										<img src="assets/shilouette.png" alt="after"/>
									</div>
									<div class="widget-navigation">
										<a class="prev-arrow"></a>
										<a class="next-arrow"></a>
									</div>
									<span class="libs">lost 66 libs </span>
									<span class="sizes">&amp; 8 sizes * </span>
									<a href="#" class="btn-free-consult">
										Get a Free Consultation! <i class="icon"></i>
									</a>
									<span class="results">*Individual results may vary </span>
								</div>
								<div class="item">
									<h2>Success Stories</h2>
									<h3>Daniel</h3>
									<div class="before-picture">
										<img src="assets/man-before.png" alt="before"/>
									</div>
									<div class="after-picture">
										<img src="assets/man-after.png" alt="after"/>
									</div>
									<div class="widget-navigation">
										<a class="prev-arrow"></a>
										<a class="next-arrow"></a>
									</div>
									<span class="libs">lost 88 libs </span>
									<span class="sizes">&amp; 5 sizes * </span>
									@if(Session::get('customer_id')==NULL)
									<a href="{{route('customer_login_page')}}" class="btn-free-consult">
										@else
										<a href="{{route('appointment_page')}}" class="btn-free-consult">
										@endif
										Get a Free Consultation! <i class="icon"></i>
									</a>
									<span class="results">*Individual results may vary </span>
								</div>
							</div>
							<span class="arrow-bottom blue"></span>
						</div>
					</div>
				</div>
			</div>
        </div>
        
        <script>
            $('#input_starttime').pickatime({
            // 12 or 24 hour
            twelvehour: true,
            });
        </script>
@endsection