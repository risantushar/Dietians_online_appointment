@extends('admin.admin_master')

@section('title')
 Add || Product Category
 @endsection
 @section('body')
@if(session('add_success_message'))
<div class="alert alert-success">
    {{session('add_success_message')}}
</div>
@endif
    <div class="container-fluid " style="margin-top:10px;">
        <div class="row col d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">Add Product Category</div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">Add Product Category</h3>
                        </div>
                        <hr>
                        <form action="{{route('add_product_category')}}" method="post">
                            @csrf
                            <div class="form-group has-success">
                                <label for="cc-name" class="control-label mb-1">Category Name</label>
                                <input id="product_category_name" name="product_category_name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                    autocomplete="product_category_name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                <span class="help-block field-validation-valid" data-valmsg-for="prodcut_category_name" data-valmsg-replace="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="product_category_description" class="control-label mb-1">Category Description</label>
                                <textarea id="product_category_description" name="product_category_description" type="text" class="form-control cc-number identified visa">
                                </textarea>
                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="agile-field-txt col-md-12">
                                        <label for="cc-name" class="control-label mb-1">Publication Status</label>
                                        <div class="agile-field-txt col-md-12 " style="padding: 8px">
                                            <label style="color:green;font-weight: bold">
                                                <input style="text-align: center;margin-right:5px" type="radio" name="product_publication_status" value="1"/>Published</label>
                                            <label style="color:red;font-weight: bold;">
                                                <input style="text-align: center;margin-right:5px" type="radio" name="product_publication_status" value="0"/>UnPublished</label>
                                        </div>
                                </div>
                            </div>
                            <div>
                                <button id="" type="submit" class="btn btn-lg btn-info btn-block">
                                    <span id="payment-button-amount">Add Category</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @endsection