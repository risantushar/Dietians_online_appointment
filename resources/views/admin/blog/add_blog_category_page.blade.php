@extends('admin.admin_master')
@section('title')
    Add || Category
@endsection

@section('body')
@if(session('category_add_message'))
    <div class="alert alert-success">
        {{session('category_add_message')}}
    </div>
@endif
<div class="container-fluid " style="margin-top:10px;">
    <div class="row col d-flex justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">Add Blog Category</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Add Blog Category</h3>
                    </div>
                    <hr>
                    <form action="{{route('add_blog_category')}}" method="post">
                        @csrf
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Category Name</label>
                            <input id="category_name" name="category_name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                autocomplete="category_name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required>
                            <span class="help-block field-validation-valid" data-valmsg-for="category_name" data-valmsg-replace="true"></span>
                        </div>

                        <div class="form-group">
                            <label for="category_description" class="control-label mb-1">Blog Description</label>
                            <textarea id="category_description" name="category_description" type="text" class="form-control cc-number identified visa" required>
                            </textarea>
                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="agile-field-txt col-md-12">
                                    <label for="cc-name" class="control-label mb-1">Active Status</label>
                                    <div class="agile-field-txt col-md-12 " style="padding: 8px">
                                        <label style="color:green;font-weight: bold">
                                            <input style="text-align: center;margin-right:5px" type="radio" name="publication_status" value="1"/>Publish</label>
                                        <label style="color:red;font-weight: bold;">
                                            <input style="text-align: center;margin-right:5px" type="radio" name="publication_status" value="0"/>Unpublish</label>
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