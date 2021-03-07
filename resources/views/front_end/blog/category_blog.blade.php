@extends('front_end.master')
@section('title')
    Blog || Post
@endsection
@section('body')
      <!-- breadcrumbs -->
      <div class="dn-breadcrumbs">
        <div class="dn-breadcrumbs-background-services"></div>
        <div class="container">
            <div class="row">
                <div class="span16">
                    <ul class="breadcrumb">
                        <li>
                            <a href="home.html">Home</a><span class="arrow-breadcrumbs"></span>
                        </li>
                        <li class="active">
                            Blog
                        </li>
                    </ul>
                    <div class="dn-search">
                        <input type="text" class="input-search" value="Search" />
                        <button class="search-btn"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

                        @foreach ($category_posts as $post)
                        <div class="post-entry-container">
                            <h2 class="post-title">
                                <a href="">{{$post->post_title}}</a>
                            </h2>
                            <div class="blog-list-box">
                                <div class="blog-image-container">
                                    <a href="">
                                        <img src="{{asset($post->post_image)}}" alt="image" />
                                        <span class="mask">
												<i class="link-icon-hover"></i>
											</span>
                                    </a>
                                </div>
                                <div class="row-fluid">
                                    <div class="span9">
                                        <div class="post-entry">
                                            <p>{{$post->post_description}}</p>
                                        </div>
                                    </div>
                                    <div class="span5">
                                        <div class="post-meta">
                                            <div class="info_row">
                                                Posted In: <span>{{$post->created_at}}</span>
                                            </div>
                                            <div class="info_row">
                                                <span><a href="#">Admin</a></span>
                                            </div>
                                            <a href="{{route('post_details_page',['id'=>$post->post_id])}}" class="link_more">Read More<i class="link-more-icon"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="clearfix"></div>

                </div>

            </div>
        </div>
    </div>

@endsection