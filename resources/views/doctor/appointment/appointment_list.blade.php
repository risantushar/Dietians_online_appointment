@extends('doctor.doctor_master')
@section('title')
    Appointments || List
@endsection
@section('body')
@if(session('meeting_create_message'))
<div class="alert alert-success">
    {{session('meeting_create_message')}}
</div>
@elseif(session('link_sheared_message'))
<div class="alert alert-success">
    {{session('link_sheared_message')}}
</div>
@elseif(session('delete_appointment_message'))
<div class="alert alert-success">
    {{session('delete_appointment_message')}}
</div>
@endif
<div class="container">
<table id="example" class="table table-striped table-responsive table-bordered" style="width:100%">
    <thead>
        <tr class="text-center">
            <th>Sl No</th>
            <th>Patient Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>App_time</th>
            <th>App_date</th>
            <th>Comment</th>
            <th>Meeting Start Link</th>
            <th>Action</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @php
            $i=1;
        @endphp
        @foreach($all_appointments as $all_appointment)
        <tr class="text-center">
            <form action="{{route('assign_to_doctor',['appointment_id'=>$all_appointment->appointment_id])}}" method="POST">
                @csrf
                <td>{{$i++}}</td>
                <td>{{$all_appointment->customer_name}}</td>
                <td>{{$all_appointment->customer_email}}</td>
                <td>{{$all_appointment->customer_mobile}}</td>
                <td>{{$all_appointment->app_time}}</td>
                <td>{{$all_appointment->app_date}}</td>
                <td>{{$all_appointment->customer_comment}}</td>
                <td>
                    @if($all_appointment->meeting_start_link==NULL)
                        <a target="_blank" ><button class="btn btn-danger">No Link Yet!</button></a>
                        @else
                        <a target="_blank" style="btn btn-success" href="{{$all_appointment->meeting_start_link}}">Start Meeting</a>
                    @endif
                    
                </td>
                <td>
                    @if($all_appointment->meeting_link==null)
                    <a href="{{route('link_create_page',['appointment_id'=>$all_appointment->appointment_id])}}"  class="btn btn-small btn-success">Create Appoinment</a></td>
                        @else
                        <a href="{{route('share_joining_link',['appointment_id'=>$all_appointment->appointment_id])}}" class="btn btn-small btn-success">Share Joing Link</a>
                </td>
                    @endif
                </div>
                </td>
                <td><a href="{{route('delete_appointment',['appointment_id'=>$all_appointment->appointment_id])}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
            </form>
        </tr>
        @endforeach
</table>
</div>
@endsection