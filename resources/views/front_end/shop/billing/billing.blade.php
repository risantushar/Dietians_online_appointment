@extends('front_end.master')
@section('title')
    Billing || Info
@endsection
<link rel="stylesheet" href="{{asset('/front_end/billing/style.css')}}">
@section('body')
<div class="ps-checkout">
    <div class="container">
        <div class="row">
            <form action="{{ route('update_billing') }}" method="post">
                @csrf
            <div class="col-md-12">
                <div class="ps-checkout__billing">
                    <h3>Additional information</h3>
                    <div class="form-group form-group--inline">
                        <label>Phone<span>*</span>
                        </label>
                        <div class="form-group__content">
                            <input class="form-control" name="mobile_number" type="Number" name="mobile_number"
                                value="880" required>
                        </div>
                    </div>
                    <div class="form-group form-group--inline">
                        <label>Country<span>*</span>
                        </label>
                        <div class="form-group__content">
                            <input class="form-control" type="text" name="country" required>
                        </div>
                    </div>
                    <div class="form-group form-group--inline">
                        <label>City<span>*</span>
                        </label>
                        <div class="form-group__content">
                            <input class="form-control" type="text" name="city" required>
                        </div>
                    </div>
                    <div class="form-group form-group--inline">
                        <label>Zip-Code<span>*</span>
                        </label>
                        <div class="form-group__content">
                            <input class="form-control" type="number" name="zip_code" required>
                        </div>
                    </div>

                    <div class="form-group form-group--inline">
                        <label>Address<span>*</span>
                        </label>
                        <div class="form-group__content">
                            <textarea class="form-control" type="text" name="address" required></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Save Info</button>
                </div>
            </div>
        </form>
            {{-- <div class="col-md-6">
                <div class="col-md-6">
                    <img src="{{asset('/front_end/billing/images/a.jpg')}}" alt="" style="margin-top: 50px;height:400px;width:300px">
                </div>
            </div> --}}
        </div>
    </div>
    </div>
@endsection
           