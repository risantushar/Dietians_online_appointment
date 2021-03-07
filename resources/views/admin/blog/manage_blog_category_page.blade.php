@extends('admin.admin_master')
@section('title')
    Manage || Category
@endsection

@section('body')
@if(session('unpublish_message'))
<div class="alert alert-success">
    {{session('unpublish_message')}}
</div>
@elseif(session('publish_message'))
<div class="alert alert-success">
    {{session('publish_message')}}
</div>
@elseif(session('delete_message'))
<div class="alert alert-success">
    {{session('delete_message')}}
</div>
@endif
<div class="container">
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Sl No</th>
            <th>Category Name</th>
            {{-- <th>Category Description</th> --}}
            <th>Publiction Status</th>
            <th>Created</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php
            $i=1;
        @endphp
        @foreach($all_categories as $all_category)
             <tr>
            <td>{{$i++}}</td>
            <td>{{$all_category->blog_category_name}}</td>
            {{-- <td style="width: 200px;margin: 0 auto 30px;height:20px">{{$all_category->medicin_category_description}}</td> --}}

            @if($all_category->publication_status=='1')
            <td style="color: green">Active</td>
            @else
            <td style="color: red">Deactive</td>
            @endif
            
            <td>{{$all_category->created_at}}</td>
            <td>
                <div class="row d-flex" style="display:inline">
          
                    <a href="" class="dlt_btn" style="padding-right:15px;padding-left:10px"><i class="fas fa-edit"></i></a>
            
                    <a href="{{route('delete_blog_category',['id'=>$all_category->id])}}" class="dlt_btn"style="padding-right:15px"><i class="fas fa-trash"></i></a>
    
                    <a href="{{route('published_blog_category',['id'=>$all_category->id])}}" class="dlt_btn"style="padding-right:15px"><i class="fas fa-eye"></i></a>
    
                    <a href="{{route('unpublished_blog_category',['id'=>$all_category->id])}}" class="dlt_btn"><i class="fas fa-eye-slash"></i></a>
                    {{-- <a href="{{route('edit-category',['id'=>$category->id])}}" class="dlt_btn" style="padding-right:15px"><i class="fas fa-edit"></i></a>
            
                    <a href="{{route('delete-category',['id'=>$category->id])}}" class="dlt_btn"style="padding-right:15px"><i class="fas fa-trash"></i></a>
    
                    <a href="{{route('published-category',['id'=>$category->id])}}" class="dlt_btn"style="padding-right:15px"><i class="fas fa-eye"></i></a>
    
                    <a href="{{route('unpublished-category',['id'=>$category->id])}}" class="dlt_btn"><i class="fas fa-eye-slash"></i></a> --}}
              </div>
            </td>
        </tr>
        @endforeach
</table>
</div>
@endsection