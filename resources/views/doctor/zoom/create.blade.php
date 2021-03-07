@extends('doctor.doctor_master')
@section('title')
    Meeting || Create
@endsection
@section('body')
    <div class="container">
        <form action="{{route('create')}}" method="POST">
            @csrf
        <div class="row justify-content-center">
            <div class="card col-md-6">
                <div class="card-header">
                    <h4>Meeting Create</h4>
                </div>
                <div class="card-body col-md-10">
                    <div class="form-group">
                        <label for="">Appointment ID</label>
                        <input value="{{$appointment_details->appointment_id}}" type="number" id="appointment_id" name="appointment_id"  readonly style="border: 1px solid #ddd;width:100%">
                    </div>
                    <div class="form-group">
                        <label for="">Meeting Topic</label>
                        <input value="Appointment {{$appointment_details->appointment_id}} with {{$appointment_details->customer_name}}" type="text" id="topic" name="topic"  required style="border: 1px solid #ddd;width:100%">
                    </div>

                    <div class="form-group">
                        <label for="">Meeting Date</label>
                        <input type="dateTime" id="start_time" name="start_time" value="{{$appointment_details->app_date}} T {{$appointment_details->app_time}}"  required style="border: 1px solid #ddd;width:100%">
                    </div>
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-primary">Create Meeting </button>
                </div>
            </div>
        </div>
    </form>
    </div>
@endsection