@extends('front_end.master')
@section('title')
    Orders || List
@endsection
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@section('body')
    <div class="container" style="padding:20px 0 20px 0">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="card"  style="width: 800px">
                <div class="card-header text-center">
                    <h3>Order Preview</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Item No</th>
                            <th scope="col">Product name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                          </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=1;
                        @endphp
                         @foreach($cartContents as $cartContent)
                            <tr style="border-bottom: 1px solid #ddd">
                                <td>{{$i++}}</td>        
                                <td>{{$cartContent->name}}</td>        
                                <td>{{$cartContent->quantity}} X {{$cartContent->price}}</td>        
                                <td>{{$cartContent->quantity*$cartContent->price}}</td>       
                            </tr>
                        @endforeach 
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Order Total</td>
                            <td>{{$totalAmount=Session::get('totalAmount')}}</td>
                        </tr>
                        </tbody>
                        <tfoot>
                            
                        </tfoot>
                      </table>
                        <a href="{{route('place_order',['price'=>$totalAmount])}}" class="btn btn-primary" style="float: right"><i class="fa fa-order"></i> Place Order</a>
                        <a href="{{route('shop_page')}}" class="btn btn-primary" style="float: left"><i class="fa fa-arrow-left"></i> Go To shopping</a>
                </div>
            </div>
        </div>
    </div>
@endsection