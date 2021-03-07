@extends('front_end.master')
@section('title')
    Medicin || Cart
@endsection
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{asset('/front_end/cart/css/bootstrap.min.css')}}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{asset('/front_end/cart/css/mdb-pro.min.css')}}">
  <!-- Material Design Bootstrap Ecommerce -->
  <link rel="stylesheet" href="{{asset('/front_end/cart/css/mdb.ecommerce.min.css')}}">
  <!-- Your custom styles (optional) -->

@section('body')
    <!--Section: Block Content-->
<section>

<div class="container">
    <div class="row">
            <!--Grid row-->
    <div class="row">
  
        <!--Grid column-->
        <div class="col-lg-8">
    
          <!-- Card -->
          <div class="mb-3">
            <div class="pt-4 wish-list">
              @php($totalItem=Cart::getTotalQuantity())
              @php(Session::put('cartItem',$totalItem))
              <h5 class="mb-4">Cart (<span>{{$totalItem}}</span> items)</h5>
              
              @foreach($cartProducts as $cartProduct)
              <div class="row mb-4">
                <div class="col-md-5 col-lg-3 col-xl-3">
                  <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                    <img class="img-fluid w-100"
                      src="{{asset($cartProduct->attributes['image'])}}" alt="Sample">
                    <a href="#!">
                      <div class="mask">
                        <img class="img-fluid w-100"
                          src="{{asset($cartProduct->attributes['image'])}}">
                        <div class="mask rgba-black-slight"></div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-7 col-lg-9 col-xl-9">
                  <div>
                    <div class="d-flex justify-content-between">
                      <div>
                        <h5>{{$cartProduct->name}}</h5>
                        {{-- <p class="mb-3 text-muted text-uppercase small">Shirt - blue</p>
                        <p class="mb-2 text-muted text-uppercase small">Color: blue</p>
                        <p class="mb-3 text-muted text-uppercase small">Size: M</p> --}}
                      </div>
                      <div>
                        <form action="{{route('cart_qty_update',$cartProduct->id)}}" method="POST">
                          @csrf
                        <div class="def-number-input number-input safari_only mb-0 w-100">
                          {{-- <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                            class="fa fa-minus"></button> --}}
                          <input class="quantity text-center" min="1" name="quantity" value="{{$cartProduct->quantity}}" type="number">
                          <button class="btn btn-small">Update</button>
                          {{-- <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                            class="fa fa-plus"></button> --}}
                        </div>
                      </form>
                        <small id="passwordHelpBlock" class="form-text text-muted text-center">
                          (Note,At least 1 piece)
                        </small>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <div>
                        <a href="{{route('delete_cart',['product_id'=>$cartProduct->id])}}" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                            class="fas fa-trash-alt mr-1"></i> Remove item </a>
                      </div>
                      <p class="mb-0"><span><strong id="summary">Price: {{$total=$cartProduct->quantity*$cartProduct->price}}৳</strong></span></p class="mb-0">
                    </div>
                  </div>
                </div>
              </div>  
              @endforeach
              <hr class="mb-4">

            <a href="{{route('all_product_page')}}" type="button" class="btn btn-primary btn-block">go to shopping</a>
            </div>
          </div>
          <!-- Card -->
    
        </div>
        <!--Grid column-->
    
        <!--Grid column-->
        <div class="col-lg-4">
    
          <!-- Card -->
          <div class="mb-3">
            <div class="pt-4">
    
              <h5 class="mb-3">The total amount:</h5>

              @php($totalItem=Cart::getTotalQuantity())
              @php(Session::put('cartItem',$totalItem))
              @php($shipping=60.00)

              @if(Session::get('cartItem')==NULL)
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                 Total Item
                  <span>0</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                  Product amount
                  <span>0.00 ৳</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  Shipping
                  <span>0.00 ৳</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                  <div>
                    <strong>The total amount of</strong>
                  </div>
                  <span><strong>0.00 ৳</strong></span>
                </li>
              </ul>

              @else
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                 Total Item
                  <span>{{Session::get('cartItem')}}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                  Product amount
                  <span>{{$sum=Cart::getSubTotal()}} ৳</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  Shipping
                  <span>{{$shipping}} ৳</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                  <div>
                    <strong>The total amount of</strong>
                  </div>
                  <span><strong>{{$sum=$sum+$shipping}} ৳</strong></span>
                </li>
              </ul>
              @endif
    
              <button type="button" class="btn btn-primary btn-block">go to checkout</button>
    
            </div>
          </div>
          <!-- Card -->
    
          <!-- Card -->
          <div class="mb-3">
            <div class="pt-4">
    
              <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample"
                aria-expanded="false" aria-controls="collapseExample">
                Add a discount code (optional)
                <span><i class="fas fa-chevron-down pt-1"></i></span>
              </a>
    
              <div class="collapse" id="collapseExample">
                <div class="mt-3">
                  <div class="md-form md-outline mb-0">
                    <input type="text" id="discount-code" class="form-control font-weight-light"
                      placeholder="Enter discount code">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card -->
    
        </div>
        <!--Grid column-->
    
      </div>
      <!-- Grid row -->
    
    </section>
    <!--Section: Block Content-->
    </div>
</div>

  <script src="{{asset('/front_end/cart/js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('/front_end/cart/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('/front_end/cart/js/bootstrap.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('/front_end/cart/js/mdb.min.js')}}"></script>
    <!-- MDB Ecommerce JavaScript -->
    <script type="text/javascript" src="{{asset('/front_end/cart/js/mdb.ecommerce.min.js')}}"></script>
@endsection