<div class="dn-slider">
			<div class="dn-slider-background"></div>

			<div class="container">
				<div class="row-fluid">
					<div class="slider-slideshow span12">
						<div id="dn-main-slider" class="owl-carousel">
							<div class="item">
								<img class="img-circle" src="{{asset('/front_end/userInterface/assets/slider-img.png')}}" alt="Slide Image">
								<div class="slide-text">
									<h2>Loose the fat.</h2>
									<h3>Live the Life!</h3>
									<p>
										Looking to lose weight, boost your metabolism and finally put an end to emotional eating?
									</p>
								</div>
							</div>
							<div class="item">
								<img class="img-circle" src="{{asset('/front_end/userInterface/assets/slide-2.png')}}" alt="Slide Image">
								<div class="slide-text">
									<h2>Tomatoes &amp; Garlic</h2>
									<h3>Pork Stew</h3>
									<p>
										Hard cheese macaroni cheese cheeseburger. Feta airedale edam port-salut babybel say cheese rubber cheese dolcelatte.
									</p>
								</div>
							</div>
							<div class="item">
								<img class="img-circle" src="{{asset('/front_end/userInterface/assets/slide-3.png')}}" alt="Slide Image">
								<div class="slide-text">
									<h2>Dieticians Versus </h2>
									<h3>Coaches</h3>
									<p>
										Why dietitians are the perfect nutrition coaches?
									</p>
								</div>
							</div>
						</div>
					</div>

					<!-- Slider Widget -->
					{{-- <div class="slider-widget span4">
						<div id="dn-top-widget-slider" class="owl-carousel">
							<div class="item">
								<h2>Success Stories</h2>
								<h3>Jessica</h3>
								<div class="before-picture">
									<img src="{{asset('/front_end/userInterface/assets/before-picture.png')}}" alt="before"/>
								</div>
								<div class="after-picture">
									<img src="{{asset('/front_end/userInterface/assets/shilouette.png')}}" alt="after"/>
								</div>
								<div class="widget-navigation">
									<a class="prev-arrow"></a>
									<a class="next-arrow"></a>
								</div>
								<span class="libs">lost 66 libs </span>
								<span class="sizes">&amp; 8 sizes * </span>
								@if(Session::get('customer_id')==NULL)
									<a href="{{route('customer_login_page')}}" class="btn-free-consult">
										@else
										<a href="{{route('appointment_page')}}" class="btn-free-consult">
								@endif
									Get a Free Consultation! <i class="icon"></i>
								</a>
								<span class="results">*Individual results may vary </span>
							</div>
							<div class="item">
								<h2>Success Stories</h2>
								<h3>Daniel</h3>
								<div class="before-picture">
									<img src="{{asset('/front_end/userInterface/assets/man-before.png')}}" alt="before"/>
								</div>
								<div class="after-picture">
									<img src="{{asset('/front_end/userInterface/assets/man-after.png')}}" alt="after"/>
								</div>
								<div class="widget-navigation">
									<a class="prev-arrow"></a>
									<a class="next-arrow"></a>
								</div>
								<span class="libs">lost 88 libs </span>
								<span class="sizes">&amp; 5 sizes * </span>
								<a href="contact-request-consultation.html" class="btn-free-consult">
									Get a Free Consultation! <i class="icon"></i>
								</a>
								<span class="results">*Individual results may vary </span>
							</div>
						</div>
						<span class="arrow-bottom blue"></span>
					</div> --}}
				</div>
			</div>
		</div>
