<?php

namespace App\Http\Controllers\Zoom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ZoomMeetingTrait;
use Illuminate\Support\Facades\Validator;
use DB;
use Session;
use Mail;

class MeetingController extends Controller
{
    use ZoomMeetingTrait;

    const MEETING_TYPE_INSTANT = 1;
    const MEETING_TYPE_SCHEDULE = 2;
    const MEETING_TYPE_RECURRING = 3;
    const MEETING_TYPE_FIXED_RECURRING_FIXED = 8;

    public function delete_appointment($id)
    {
        $delete_appointment=DB::table('appointments')
        ->where('appointment_id',$id)
        ->delete();
        return redirect('/doctor/appointment/list')->with('delete_appointment_message',"Appointment deleted successfully");
    }
    public function share_joining_link($id)
    {   
        $appointment_info=DB::table('appointments')
        ->where('appointment_id',$id)
        ->first();

        $doctor_info=DB::table('doctors')
        ->where('doctor_id',$appointment_info->assigned_doctor)
        ->first();

        $to_name=$appointment_info->customer_name;
        $to_email=$appointment_info->customer_email;
        $data=array(
            'name'=>$appointment_info->customer_name,
            'body'=>"Hi,I am Doctor ".$doctor_info->doctor_name." .You have an appoinment today ".$appointment_info->app_date."
            in ".$appointment_info->app_time." .Please join in this link ".$appointment_info->meeting_link." in time.Thank You" );
        Mail::send('share_joining_link',$data,function($message) use ($to_name,$to_email){
            $message->to($to_email)
            ->subject('Appointment Notification');
        });
        return redirect('/doctor/appointment/list')->with('link_sheared_message',"Link shared successfully");
    }
    public function list(Request $request)
    {
        $path = 'users/me/meetings';
        $response = $this->zoomGet($path);

        $data = json_decode($response->body(), true);
        $data['meetings'] = array_map(function (&$m) {
            $m['start_at'] = $this->toUnixTimeStamp($m['start_time'], $m['timezone']);
            return $m;
        }, $data['meetings']);

        return [
            'success' => $response->ok(),
            'data' => $data,
        ];
    }

public function create(Request $request)
{
    // return $request->all();
    $validator = Validator::make($request->all(), [
        'topic' => 'required|string',
        'start_time' => 'required|date',
        'agenda' => 'string|nullable',
    ]);
    
    if ($validator->fails()) {
        return [
            'success' => false,
            'data' => $validator->errors(),
        ];
    }
    $data = $validator->validated();

    $path = 'users/me/meetings';
    $response = $this->zoomPost($path, [
        'topic' => $data['topic'],
        'type' => self::MEETING_TYPE_SCHEDULE,
        'start_time' => $this->toZoomTimeFormat($data['start_time']),
        'duration' => 30,
        // 'agenda' => $data['agenda'],
        'settings' => [
            'host_video' => false,
            'participant_video' => false,
            'waiting_room' => true,
        ]
    ]);
    $data = json_decode($response->getBody());

    $set_link=DB::table('appointments')
    ->where('appointment_id',$request->appointment_id)
    ->update([
        'meeting_link'=>$data->join_url,
        'meeting_start_link'=>$data->start_url
        ]);

    return redirect('/doctor/appointment/list')->with('meeting_create_message',"Meeting created successfully");
    // return [
    //     'success' => $response->status() === 201,
    //     'data' => json_decode($response->body(), true),
    // ];
}

public function get(Request $request, string $id)
{
    $path = 'meetings/' . $id;
    $response = $this->zoomGet($path);

    $data = json_decode($response->body(), true);
    if ($response->ok()) {
        $data['start_at'] = $this->toUnixTimeStamp($data['start_time'], $data['timezone']);
    }

    return [
        'success' => $response->ok(),
        'data' => $data,
    ];
}
public function update(Request $request, string $id)
{
    $validator = Validator::make($request->all(), [
        'topic' => 'required|string',
        'start_time' => 'required|date',
        'agenda' => 'string|nullable',
    ]);

    if ($validator->fails()) {
        return [
            'success' => false,
            'data' => $validator->errors(),
        ];
    }
    $data = $validator->validated();

    $path = 'meetings/' . $id;
    $response = $this->zoomPatch($path, [
        'topic' => $data['topic'],
        'type' => self::MEETING_TYPE_SCHEDULE,
        'start_time' => (new \DateTime($data['start_time']))->format('Y-m-d\TH:i:s'),
        'duration' => 30,
        'agenda' => $data['agenda'],
        'settings' => [
            'host_video' => false,
            'participant_video' => false,
            'waiting_room' => true,
        ]
    ]);

    return [
        'success' => $response->status() === 204,
        'data' => json_decode($response->body(), true),
    ];
}
public function delete(Request $request, string $id)
{
    $path = 'meetings/' . $id;
    $response = $this->zoomDelete($path);

    return [
        'success' => $response->status() === 204,
        'data' => json_decode($response->body(), true),
    ];
}
}
