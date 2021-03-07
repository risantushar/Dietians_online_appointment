@extends('front_end.master')

@section('title')
My || Appointment
@endsection

@section('body')
@if(session('cancle_message'))
    <div class="alert alert-success">
        {{session('cancle_message')}}
    </div>    
@endif
    <div class="container justify-content-center">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>My Appointment</h3>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Patient Name</th>
                                    <th>Patient Email</th>
                                    <th>Mobile</th>
                                    <th>Join Link</th>
                                    <th>App_time</th>
                                    <th>App_date</th>
                                    <th>Doctor</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i=1;
                                @endphp
                                @foreach($appointment_details as $appointment_detail)
                                     <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$appointment_detail->customer_name}}</td>
                                    <td>{{$appointment_detail->customer_email}}</td>
                                    <td>{{$appointment_detail->customer_mobile}}</td>
                                    <td><a target="_blank" href="{{$appointment_detail->meeting_link}}" class="btn btn-success">Join meeting</a></td>
                                    <td>{{$appointment_detail->app_time}}</td>
                                    <td>{{$appointment_detail->app_date}}</td>
                                    <td>
                                        @if($appointment_detail->assigned_doctor==NULL)
                                            <span> Not Assigned Yet!</span>
                                            @else
                                            {{$appointment_detail->doctor_name}}
                                        @endif
                                    </td>
                                    <td><a href="{{route('cancle_appointment',['appointment_id'=>$appointment_detail->appointment_id])}}" class="btn btn-small btn-danger" style="color: white">Cancle</a></td>
                                      </div>
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection