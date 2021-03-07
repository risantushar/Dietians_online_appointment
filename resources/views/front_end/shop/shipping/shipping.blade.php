@extends('front_end.master')
@section('title')
Shipping || Form
@endsection
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@section('body')
    <div class="container justify-content-center" style="padding:20px 0 20px 0">
        <div class="row">
            <div class="col-md-3"></div>
               <div class="card" style="width: 500px">
                <div class="card-header">
                    <h3>Shipping Information</h3>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <form action="{{route('save_shipping')}}" method="post">
                            @csrf
                            <div class="form-group">
                              <label for="exampleInputEmail1">Shipping Name</label>
                              <input name="shipping_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter shipping name" required>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input name="shipping_email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Mobile Number</label>
                              <input name="shipping_mobile" value="880" type="number" class="form-control" id="exampleInputPassword1" placeholder="Mobile Number" required>
                            </div>
                            
                            <div class="form-group">
                              <label for="exampleInputPassword1">Shipping Country</label>
                              <input name="shipping_country"  type="text" class="form-control" id="exampleInputPassword1" placeholder="Shipping Country" required>
                            </div>
                            
                            <div class="form-group">
                              <label for="exampleInputPassword1">Shipping City</label>
                              <input name="shipping_city"  type="text" class="form-control" id="exampleInputPassword1" placeholder="Shipping City" required>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Shipping Zip Code</label>
                              <input name="shipping_zip_code"  type="text" class="form-control" id="exampleInputPassword1" placeholder="Shipping Zip Code" required>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Shipping Address</label>
                              <textarea name="shipping_address" type="text" class="form-control" id="exampleInputPassword1" placeholder="Shipping Address" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Shipping Info</button>
                          </form>
                       </div>
                </div>
            </div>
        </div>
    </div>
@endsection