@extends('admin.admin_master')

@section('title')
    Manage || Tutorial
@endsection

@section('body')
@if(session('publish_message'))
<div class="alert alert-success">
    {{session('publish_message')}}
</div>

@elseif(session('unpublish_message'))
<div class="alert alert-success">
    {{session('unpublish_message')}}
</div>

@elseif(session('delete_message'))
<div class="alert alert-success">
    {{session('delete_message')}}
</div>
@endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-md-12">
                <div class="card-header">
                    <h5 style="text-transform: uppercase">Manage Tutorials</h5>
                </div>
                <div class="card-body">
                    <table class="table ">
                        <thead>
                            <tr style="background: lightgray">
                                <th scope="col">SL No</th>
                                <th scope="col">Category</th>
                                <th scope="col">Thumbnail</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                              </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                        @foreach($tutorials as $tutorial)
                          <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$tutorial->blog_category_name}}</td>
                            <td><img style="height:50px;width:100px" src="{{asset($tutorial->tutorial_thumbnail)}}" alt=""></td>
                            <td>{{$tutorial->tutorial_title}}</td>

                            @if($tutorial->publication_status==1)
                            <td>
                                    <span style="color: green">Published</span>
                            </td>
                            @else
                            <td>
                                    <span style="color: red">Unpublished</span>
                            </td>
                            @endif
                            <td>
                                <a href="{{route('add_tutorial_parts_page',['id'=>$tutorial->tutorial_id])}}" class="btn-sm btn-success"><i class="fas fa-plus"></i></a>
                                <a href="{{route('delete_tutorial',['tutorial_id'=>$tutorial->tutorial_id])}}" class="btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                <a href="{{route('publish_tutorial',['tutorial_id'=>$tutorial->tutorial_id])}}" class="btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                <a href="{{route('unpublish_tutorial',['tutorial_id'=>$tutorial->tutorial_id])}}" class="btn-sm btn-primary"><i class="fas fa-eye-slash"></i></a>
                            </td>
                          </tr>
                        @endforeach
                          <tr style="background: lightgray">
                            <th scope="col">SL No</th>
                            <th scope="col">Category</th>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Title</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </tbody>
                      </table>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
@endsection