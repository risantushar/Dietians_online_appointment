<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Alert;

class AppoinmentController extends Controller
{
    public function doctor_appointment_list()
    {
        $doctor_id=Session::get('doctor_id');
        $all_appointments=DB::table('appointments')
        ->where('assigned_doctor',$doctor_id)
        ->orderBy('app_date','asc')
        ->orderBy('app_time','asc')
        ->get();

        return view('doctor.appointment.appointment_list',[
            'all_appointments'=>$all_appointments,
            ]);
    }
    public function cancle_appointment($appointment_id)
    {
        $cancleAppointment=DB::table('appointments')
        ->where('appointment_id',$appointment_id)
        ->delete();
        return redirect()->back()->with('cancle_message','Appointment cancled');
    }
    public function appointment_submit(Request $request)
    {
        // return $request->all();
        $customer_id=Session::get('customer_id');

        $duplicateAppointmentCheck=DB::table('appointments')
        ->where('customer_id',$customer_id)
        ->first();

        if($duplicateAppointmentCheck==true)
        {
            return redirect()->back()->with('appointment_error','Already hava an appoinment');   
        }
        else
        {
        $appointment=DB::table('appointments')
        ->insert([
            'customer_id'=>$customer_id,
            'customer_name'=>$request->customer_name,
            'customer_email'=>$request->customer_email,
            'customer_mobile'=>$request->customer_mobile,
            'app_time'=>$request->app_time,
            'app_date'=>$request->app_date,
            'payment_status'=>'paid',
            'customer_comment'=>$request->customer_comment,
            ]);
            Session::put('price',$request->app_fee);

            // return redirect()->back()->with('appointment_success','Appointment created successfully');
            return view('front_end.appoinment.appointment_payment');
        }
    }
}
