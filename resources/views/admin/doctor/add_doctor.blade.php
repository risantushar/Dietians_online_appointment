@extends('admin.admin_master')
@section('title')
    Add || Doctor
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
                <div class="card-header">Add Doctor Form</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Add Doctor</h3>
                    </div>
                    <hr>
                    <form action="{{route('add_doctor')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Doctor Name</label>
                            <input id="doctor_name" name="doctor_name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                autocomplete="doctor_name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required>
                            <span class="help-block field-validation-valid" data-valmsg-for="doctor_name" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Doctor title</label>
                            <input id="doctor_title" name="doctor_title" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                autocomplete="doctor_title" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required>
                            <span class="help-block field-validation-valid" data-valmsg-for="doctor_title" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Doctor Email</label>
                            <input id="doctor_email" name="doctor_email" type="email" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                autocomplete="doctor_email" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required>
                            <span class="help-block field-validation-valid" data-valmsg-for="doctor_email" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Doctor Password</label>
                            <input id="doctor_password" name="doctor_password" type="password" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                autocomplete="doctor_password" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required>
                            <span class="help-block field-validation-valid" data-valmsg-for="doctor_password" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Doctor Mobile</label>
                            <input id="doctor_mobile" name="doctor_mobile" type="number" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                autocomplete="doctor_mobile" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="880" required>
                            <span class="help-block field-validation-valid" data-valmsg-for="doctor_mobile" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="doctor_description" class="control-label mb-1">Doctor Description</label>
                            <textarea id="doctor_description" name="doctor_description" type="text" class="form-control cc-number identified visa" required>
                            </textarea>
                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="doctor_description" class="control-label mb-1">Chekup Start</label>
                            <input type="time" id="checkup_start_time" name="checkup_start_time" min="09:00" max="20:00" required>
                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="doctor_description" class="control-label mb-1">Chekup End</label>
                            <input type="time" id="checkup_end_time" name="checkup_end_time" min="09:00" max="20:00"  required>
                            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="file-input" class=" form-control-label">Doctor Image</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input required type="file" id="doctor_image" name="doctor_image" class="form-control-file">
                            </div>
                        </div>
                        <div class="row form-group justify-content-center" >
                            <img id="showImage" class="img-fluid" src="" alt="" >
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="agile-field-txt col-md-12">
                                    <label for="cc-name" class="control-label mb-1">Active Status</label>
                                    <div class="agile-field-txt col-md-12 " style="padding: 8px">
                                        <label style="color:green;font-weight: bold">
                                            <input style="text-align: center;margin-right:5px" type="radio" name="active_status" value="1"/>Active</label>
                                        <label style="color:red;font-weight: bold;">
                                            <input style="text-align: center;margin-right:5px" type="radio" name="active_status" value="0"/>Deactive</label>
                                    </div>
                            </div>
                        </div>
                        <div>
                            <button id="" type="submit" class="btn btn-lg btn-info btn-block">
                                <span id="payment-button-amount">Add Doctor</span>
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
    $('#doctor_image').change(function (e) {
            var reader=new FileReader();
            reader.onload=function (e) {
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
    
            });
</script>
@endsection