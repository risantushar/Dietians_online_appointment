@extends('admin.admin_master')
@section('title')
    Order || Lists
@endsection
@section('body')
@if(session('pending_message'))
<div class="alert alert-warning">
    {{session('pending_message')}}
</div>
@elseif(session('shift_message'))
<div class="alert alert-primary">
    {{session('shift_message')}}
</div>
@elseif(session('delivery_message'))
<div class="alert alert-success">
    {{session('delivery_message')}}
</div>
@endif
<div class="container">
<table id="example" class="table table-striped table-bordered " style="width:100%">
    <thead>
        <tr>
            <th>Sl</th>
            <th>Customer Id</th>
            <th>Shipping Id</th>
            <th>Amount</th>
            <th>Order Status</th>
            <th>Payment Status</th>
            {{-- <th>Order Time</th> --}}
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i=1;
    @endphp
    @foreach($orderList as $orderList)
         <tr>
        <td>{{$i++}}</td>
        <td>{{$orderList->customer_id}}</td>
        <td>{{$orderList->shipping_id}}</td>
        <td>{{$orderList->total_price}}</td>
        <td>{{$orderList->order_status}}</td>
        <td>{{$orderList->payment_status}}</td>
        {{-- <td style="width: 200px;margin: 0 auto 30px;height:20px">{{$orderList->medicin_category_description}}</td> --}}
        
        {{-- <td>{{$orderList->created_at}}</td> --}}
        <td>
            <div class="row d-flex" style="display:inline">
      
                <a href="{{route('order_pending',['order_id'=>$orderList->order_id])}}" class="dlt_btn" style="color:red;padding-right:15px;padding-left:10px">P</a>
        
                <a href="{{route('order_shift',['order_id'=>$orderList->order_id])}}" class="dlt_btn"style="color:yellowgreen;padding-right:15px">S</a>

                <a href="{{route('order_delivery',['order_id'=>$orderList->order_id])}}" class="dlt_btn"style="color:green;padding-right:15px">D</a>

                <a href="" class="dlt_btn">X</a>
                {{-- <a href="{{route('edit-category',['id'=>$category->id])}}" class="dlt_btn" style="padding-right:15px"><i class="fas fa-edit"></i></a>
        
                <a href="{{route('delete-category',['id'=>$category->id])}}" class="dlt_btn"style="padding-right:15px"><i class="fas fa-trash"></i></a>

                <a href="{{route('published-category',['id'=>$category->id])}}" class="dlt_btn"style="padding-right:15px"><i class="fas fa-eye"></i></a>

                <a href="{{route('unpublished-category',['id'=>$category->id])}}" class="dlt_btn"><i class="fas fa-eye-slash"></i></a> --}}
          </div>
        </td>
    </tr>
    @endforeach
    </tbody>
     <tfoot>
        <tr>
            <th>Sl</th>
            <th>Customer Name</th>
            <th>Shipping Name</th>
            <th>Total Price</th>
            <th>Order Status</th>
            <th>Payment Status</th>
            {{-- <th>Order Time</th> --}}
            <th>Action</th>
        </tr>
     </tfoot>
</table>
<div class="container">
    <div class="row" style="float: right">
        {{-- {{$orderList->links()}} --}}
    </div>
</div>

</div>

@endsection