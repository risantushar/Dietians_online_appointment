@extends('front_end.master')

@section('title')
    Post || Details
@endsection

@section('body')
    <!-- Main Gray Content Background -->
		<div class="gray-content-background">
			<div class="container">
				<div class="row-fluid">
					
					<!-- Sidebar Container -->
					<div class="span4">
						
						<!-- Categories Widget -->
						<div class="row-fluid">
							<div class="span16">
								<div class="categories-widget">
									<h2> Categories </h2>
									<ul class="widget-categs">
										<li>
                                            <i class="icon-categories"></i><a href="{{URL('/blog/page')}}">All blog posts <span>(10)</span></a>
                                        </li> 
                                        @foreach($blog_categories as $blog_category)
                                            <li>
                                                <i class="icon-categories"></i><a href="{{route('category_post_page',['id'=>$blog_category->id])}}">{{$blog_category->blog_category_name}} <span>(10)</span></a>
                                            </li> 
                                        @endforeach
									</ul>
								</div>
							</div>
						</div>

					</div>
					
					<!-- Main Container -->
					<div class="span12">
						<div class="blog-box">
							<h2 class="post-title">
								{{$post_details->post_title}}
							</h2>
							<div class="blog-list-box">
								<div class="blog-image-container">
									<a href="#"> <img src="{{asset($post_details->post_image)}}" alt="image"/></a>
								</div>
								<div class="post-entry">
									<p>
										{{$post_details->post_description}}
									</p>
								</div>

								<div class="post-meta blog-details-page-meta">
									<div class="info_row">
										{{$post_details->created_at}} by <span><a href="#">Admin</a></span>
									</div>
							
								</div>
						
								<div class="blog-social">
									<a href="#"><i class="icon-fb"></i></a>
									<a href="#"><i class="icon-tw"></i></a>
									<a href="#"><i class="icon-g"></i></a>
									<a href="#"><i class="icon-pin"></i></a>
								</div>

								<div class="clearfix"></div>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
@endsection