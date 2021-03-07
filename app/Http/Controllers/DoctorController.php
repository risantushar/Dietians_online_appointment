<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Facades\Image;
use DB;
use Session;
use Mail;

class DoctorController extends Controller
{
    public function assign_to_doctor(Request $request,$appointment_id)
    {
        $doctor_id = $request->doctor_id;

        $patient_info=DB::table('appointments')
        ->where('appointment_id',$appointment_id)
        ->first();

        $assign_doctor=DB::table('appointments')
        ->where('appointment_id',$appointment_id)
        ->update([
            'assigned_doctor'=>$doctor_id,
            ]);
        
            $doctor_info=DB::table('doctors')
            ->where('doctor_id',$doctor_id)
            ->first();

            $to_name=$patient_info->customer_name;
            $to_email=$patient_info->customer_email;
            $data=array(
                'name'=>$patient_info->customer_name,
                'body'=>"You have an appointment in ".$patient_info->app_date." at ".$patient_info->app_time.
                        "We have assigned ".$doctor_info->doctor_name." for your appointment.Please wait for the doctor confirmation");
            Mail::send('appointment_set',$data,function($message) use ($to_name,$to_email){
                $message->to($to_email)
                ->subject('Appointment Scheduled Notification');
            });
    
        return redirect()->back()->with('assign_success_message','Doctor successfully assigned');
    }
    protected function doctorImage(Request $request)
    {
            $doctorImage = $request->file('doctor_image');
            $fileType = $doctorImage->getClientOriginalExtension();
            $imageName = $request->doctor_name.'.'.$fileType;
            $directory = 'uploads/doctors/';
            $doctorImage_imageUrl=$directory.$imageName;

            Image::make($doctorImage)->save($doctorImage_imageUrl);
            return $doctorImage_imageUrl;
    }

    public function add_doctor(Request $request)
    {
        // return $request->checkup_end_time;
        $doctorImageUrl=$this->doctorImage($request);

        $duplicate_email_check=DB::table('doctors')
        ->where('doctor_email',$request->doctor_email)
        ->first();

        if($duplicate_email_check==true){
            return redirect()->back()->with('add_error_message','Duplicate Entry');
        }
        else
        {
            $newDoctor=DB::table('doctors')->insert([
                'doctor_name'=> $request->doctor_name,
                'doctor_title'=> $request->doctor_title,
                'doctor_email' => $request->doctor_email,
                'doctor_password' => md5($request->doctor_password),
                'doctor_mobile' => $request->doctor_mobile,
                'doctor_description' => $request->doctor_description,
                'doctor_image' => $doctorImageUrl,
                'checkup_start' => $request->checkup_start_time,
                'checkup_end' => $request->checkup_end_time,
                'active_status'=> $request->active_status
            ]);
        return redirect()->back()->with('add_success_message','Doctor Added successfully');
        }
    }
}
