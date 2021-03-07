<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class DoctorLoginController extends Controller
{
    // use AuthenticatesUsers;
    public function doctor_logout()
    {
        // Session::flush();
        $doctor_name=Session::get('doctor_name');
        session()->forget($doctor_name);
        return redirect('/doctor/login');
    }

    public function doctor_login(Request $request)
    {
        // return $request->all();
        $doctor_email = $request->email;
        $password = md5($request->password);

        $result = DB::table('doctors')
            ->where('doctor_email', $doctor_email)
            ->where('doctor_password', $password)->first();

        // return $result;
        if ($result == true) {
            Session::put('doctor_id', $result->doctor_id);
            Session::put('doctor_name', $result->doctor_name);
            // return redirect($request->session()->get('url.intended'));
            return redirect('/doctor/dashboard');
        } else {
            return redirect()->back()->with('error_message', 'Please Fill correct information');
        }
    }
    

}
