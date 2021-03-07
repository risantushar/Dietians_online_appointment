@extends('admin.admin_master')
@section('title')
    Manage || Medicin
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
            <th>Category</th>
            <th>Medicin Name</th>
            <th>Code</th>
            <th>Price</th>
            <th>Medicin Mg</th>
            <th>Image</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php
            $i=1;
        @endphp
        @foreach($all_medicins as $all_medicin)
             <tr>
            <td>{{$i++}}</td>
            <td>{{$all_medicin->medicin_category}}</td>
            <td>{{$all_medicin->medicin_name}}</td>
            <td>{{$all_medicin->medicin_code}}</td>
            <td>{{$all_medicin->medicin_price}}</td>
            <td>{{$all_medicin->medicin_mg}}</td>
            <td><img src="{{asset($all_medicin->medicin_image)}}" alt="" class="img-fluid" height="50" width="50"></td>

            @if($all_medicin->medicin_publication_status=='1')
            <td style="color: green">Active</td>
            @else
            <td style="color: red">Deactive</td>
            @endif
            
            <td>
                <div class="row d-flex" style="display:inline">
          
                    <a href="" class="dlt_btn" style="padding-right:15px;padding-left:10px"><i class="fas fa-edit"></i></a>
            
                    <a href="{{route('delete_medicin',['medicin_id'=>$all_medicin->medicin_id])}}" class="dlt_btn"style="padding-right:15px"><i class="fas fa-trash"></i></a>
    
                    <a href="{{route('publish_medicin',['medicin_id'=>$all_medicin->medicin_id])}}" class="dlt_btn"style="padding-right:15px"><i class="fas fa-eye"></i></a>
    
                    <a href="{{route('unpublish_medicin',['medicin_id'=>$all_medicin->medicin_id])}}" class="dlt_btn"><i class="fas fa-eye-slash"></i></a>
                    {{-- <a href="{{route('edit-category',['id'=>$category->id])}}" class="dlt_btn" style="padding-right:15px"><i class="fas fa-edit"></i></a>
                    <a href="{{route('unpublished-category',['id'=>$category->id])}}" class="dlt_btn"><i class="fas fa-eye-slash"></i></a> --}}
              </div>
            </td>
        </tr>
        @endforeach
    </tbody>
     <tfoot>
        <tr>
            <th>Sl No</th>
            <th>Category</th>
            <th>Medicin Name</th>
            <th>Code</th>
            <th>Price</th>
            <th>Medicin Mg</th>
            <th>Image</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
     </tfoot>
</table>
<div class="container">
    <div class="row" style="float: right">
        {{$all_medicins->links()}}
    </div>
</div>

</div>

@endsection
