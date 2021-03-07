@extends('admin.admin_master')
@section('title')
    Manage || Product Category
@endsection
@section('body')
@if(session('delete_message'))
<div class="alert alert-success">
    {{session('delete_message')}}
</div>
@elseif(session('add_success_message'))
<div class="alert alert-success">
    {{session('add_success_message')}}
</div>
@elseif(session('publish_message'))
<div class="alert alert-success">
    {{session('publish_message')}}
</div>
@endif
<div class="container">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Sl No</th>
                <th>Product Category Name</th>
                <th>Product Category Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach($all_product_categories as $all_product_category)
                 <tr>
                <td>{{$i++}}</td>
                <td>{{$all_product_category->product_category_name}}</td>
                <td>{{$all_product_category->product_category_description}}</td>
    
                @if($all_product_category->product_publication_status=='1')
                <td style="color: green">Active</td>
                @else
                <td style="color: red">Deactive</td>
                @endif
                
                <td>
                    <div class="row" style="display:inline">
              
                        <a href="" class="dlt_btn" style="padding-right:15px;padding-left:10px"><i class="fas fa-edit"></i></a>
                
                        <a href="{{route('delete_product_category',['product_category_id'=>$all_product_category->product_id])}}" class="dlt_btn"style="padding-right:15px"><i class="fas fa-trash"></i></a>
        
                        <a href="{{route('publish_product_category',['product_category_id'=>$all_product_category->product_id])}}" class="dlt_btn"style="padding-right:15px"><i class="fas fa-eye"></i></a>
        
                        <a href="{{route('unpublish_product_category',['product_category_id'=>$all_product_category->product_id])}}" class="dlt_btn"><i class="fas fa-eye-slash"></i></a>
                        {{-- <a href="{{route('edit-category',['id'=>$category->id])}}" class="dlt_btn" style="padding-right:15px"><i class="fas fa-edit"></i></a>
                
                        <a href="{{route('delete-category',['id'=>$category->id])}}" class="dlt_btn"style="padding-right:15px"><i class="fas fa-trash"></i></a>
        
                        <a href="{{route('published-category',['id'=>$category->id])}}" class="dlt_btn"style="padding-right:15px"><i class="fas fa-eye"></i></a>
        
                        <a href="{{route('unpublished-category',['id'=>$category->id])}}" class="dlt_btn"><i class="fas fa-eye-slash"></i></a> --}}
                  </div>
                </td>
            </tr>
            @endforeach
            <tr>
                <th>Sl No</th>
                <th>Product Category Name</th>
                <th>Product Category Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
    </table>
    {{$all_product_categories->links()}}
    </div>
@endsection