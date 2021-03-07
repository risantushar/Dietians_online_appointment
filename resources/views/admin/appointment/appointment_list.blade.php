@extends('admin.admin_master')
@section('title')
    Appointment || List
@endsection

@section('body')
@if(session('assign_success_message'))
<div class="alert alert-success">
    {{session('assign_success_message')}}
</div>
@elseif(session('publish_message'))
<div class="alert alert-success">
    {{session('publish_message')}}
</div>
@elseif(session('delete_message'))
<div class="alert alert-success">
    {{session('delete_message')}}
</div>
@endif
<div class="container">
<table id="example" class="table table-striped table-responsive table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Sl No</th>
            <th>Patient Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>App_time</th>
            <th>App_date</th>
            <th>Payment Status</th>
            <th>Nutrationist</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php
            $i=1;
        @endphp
        @foreach($all_appointments as $all_appointment)
        <tr>
            <form action="{{route('assign_to_doctor',['appointment_id'=>$all_appointment->appointment_id])}}" method="POST">
                @csrf
                <td>{{$i++}}</td>
                <td>{{$all_appointment->customer_name}}</td>
                <td>{{$all_appointment->customer_email}}</td>
                <td>{{$all_appointment->customer_mobile}}</td>
                <td>{{$all_appointment->app_time}}</td>
                <td>{{$all_appointment->app_date}}</td>
                <td>{{$all_appointment->payment_status}}</td>
                <td>
                    @if($all_appointment->assigned_doctor==NULL)
                        <div class="input-group mb-3">
                            <select name="doctor_id" class="custom-select" id="inputGroupSelect02">
                            <option selected>Choose...</option>
                            @foreach ($all_doctors as $all_doctor)
                                <option value="{{$all_doctor->doctor_id}}">{{$all_doctor->doctor_name}}-({{$all_doctor->checkup_start}}-{{$all_doctor->checkup_end}})</option>
                            @endforeach
                            </select>
                        </div>
                    @else
                        <span>{{$all_appointment->assigned_doctor}}</span>
                    @endif
                    
                </td>
                <td>
                    @if($all_appointment->assigned_doctor==NULL)
                    <button type="submit"  class="btn btn-small btn-primary">Assign</button></td>
                    @else
                    <button style="cursor:not-allowed" type="submit" disabled class="btn btn-small btn-primary">Assign</button></td>
                    @endif
                </div>
                </td>
            </form>
        </tr>
        @endforeach
</table>
</div>
@endsection