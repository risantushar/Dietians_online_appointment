@extends('admin.admin_master')

@section('title')
    Add Blog || Post
@endsection

@section('body')

@if(session('post_add_message'))
    <div class="alert alert-success">
        {{session('post_add_message')}}
    </div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 pb-5">
            <!--Form with header-->
            <form action="{{route('add_blog_post')}}" method="post" enctype="multipart/form-data">
                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                {{@csrf_field()}}
                <div class="card border-primary rounded-0">
                    <div class="card-header p-0">
                        <div class="text-white pl-2">
                            <h3 class=""> Add Post</h3>
                        </div>
                    </div>
                    <div class="card-body p-3">

                        <!--Body-->
                        <div class="form-group">
                            <label style="color:#dddddd">Post title</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"></div>
                                </div>
                                <input type="text" class="form-control" type="text" name="post_title" placeholder="Enter post title" required="" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label style="color:#dddddd">Post Category</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"></div>
                                </div>
                               <select name="post_category" class="custom-select">
                                    <option selected>Select post category....</option>
                                    @foreach($all_blog_categories as $blogCategory)
                                 <option value="{{ $blogCategory->id }}">{{$blogCategory->blog_category_name}}</option>
                                    @endforeach
                            </select>
                        </div>
                        
                            
                            {{-- <has-error :form="form" field="post_category"></has-error> --}}
                        </div>

                        <div class="form-group">
                            <label style="color:#dddddd">Post Description</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"></div>
                                </div>
                                <textarea class="form-control"type="text" name="post_description" required=""></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label style="color:#dddddd">Image</label>
                            <div class="input-group mb-2">
                                <div class="col-md-12">
                                    <input  type="file" name="post_image" id="post_image"  class="form-control">
                                </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="agile-field-txt col-md-12">
                                    <label style="color:#dddddd">Publication Status</label>
                                    <div class="agile-field-txt col-md-12 " style="padding: 8px">
                                        <label style="color:green;font-weight: bold"><input style="text-align: center;" type="radio" name="publication_status" value="1"/>Published</label>
                                        <label style="color:red;font-weight: bold;"><input style="text-align: center;" type="radio" name="publication_status" value="0"/>UnPublished</label>
                                    </div>
                            </div>
                        </div>


                        <div class="text-center" >
                            <input  type="submit" value="Add New Post" class="btn btn-info btn-block rounded-0 py-2">
                        </div>
                    </div>
                </div>

                </div>
            </form>
            <!--Form with header-->
        </div>
    </div>
</div>

@endsection