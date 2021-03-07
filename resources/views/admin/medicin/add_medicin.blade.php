@extends('admin.admin_master')
@section('title')
    Add || Medicin
@endsection
@section('body')

@if(session('add_success_message'))
<div class="alert alert-success">
    {{session('add_success_message')}}
</div>
@elseif(session('add_error_message'))
<div class="alert alert-danger">
    {{session('add_error_message')}}
</div>
@endif
<div class="container-fluid " style="margin-top:10px;">
    <div class="row col d-flex justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">Add Medicin</div>
                <div class="card-body">
                    <hr>
                    <form action="{{route('add_medicin')}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="email-input" class=" form-control-label">Category</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="medicin_category_name" class="form-control" >
                                    <option value="">--- Select Name ---</option>
                                    @foreach ($medicin_categories as $medicin_category)
                                        <option value="{{ $medicin_category->id }}">{{ $medicin_category->medicin_category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input required type="text" id="text-input" name="medicin_name" placeholder="Medicin Name" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Code</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input required type="text" id="text-input" name="medicin_code" placeholder="Code" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="file-input" class=" form-control-label">Medicin Image</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input required type="file" id="medicin_image" name="medicin_image" class="form-control-file">
                            </div>
                        </div>
                        <div class="row form-group justify-content-center" >
                            <img id="showImage" class="img-fluid" src="" alt="" >
                        </div>
                        <div class="form-group">
                            <label for="medicin_category_description" class="control-label mb-1">Medicin Description</label>
                            <textarea id="medicin_description" name="medicin_description" type="text" class="form-control cc-number identified visa">
                            </textarea>
                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Price/File</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input required type="text" id="text-input" name="medicin_price" placeholder="Price" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">MG</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input required type="text" id="text-input" name="medicin_mg" placeholder="Mg" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="agile-field-txt col-md-12">
                                    <label for="cc-name" class="control-label mb-1">Publication Status</label>
                                    <div class="agile-field-txt col-md-12 " style="padding: 8px">
                                        <label style="color:green;font-weight: bold">
                                            <input style="text-align: center;margin-right:5px" type="radio" name="medicin_publication_status" value="1"/>Published</label>
                                        <label style="color:red;font-weight: bold;">
                                            <input style="text-align: center;margin-right:5px" type="radio" name="medicin_publication_status" value="0"/>UnPublished</label>
                                    </div>
                                </div>
                            </div>
                        <div>
                            <button id="" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">Add Medicin</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
    $('#medicin_image').change(function (e) {
            var reader=new FileReader();
            reader.onload=function (e) {
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
    
            });
</script>
@endsection