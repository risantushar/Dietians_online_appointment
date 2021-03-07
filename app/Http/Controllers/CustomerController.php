<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class CustomerController extends Controller
{
    public function save_shipping(Request $request)
    {
        $customer_id=Session::get('customer_id');

        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['customer_id'] = $customer_id;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_mobile'] = $request->shipping_mobile;
        $data['shipping_address'] = $request->shipping_address;
        $data['shipping_city'] = $request->shipping_city;
        $data['shipping_country'] = $request->shipping_country;
        $data['shipping_zip_code'] = $request->shipping_zip_code;

        $shipping_id = DB::table('shippings')
        ->insertGetId($data);
        Session::put('shipping_id', $shipping_id);
        return redirect('/order/page');

    }
    public function customer_logout()
    {
        Session::flush();
        return redirect('/customer/login/page');
    }
    public function update_billing(Request $request)
    {
        // return $request->all();
        $data = array();
        $customer_id = Session::get('customer_id');

        $data['customer_mobile_number'] = $request->mobile_number;
        $data['customer_address'] = $request->address;
        $data['customer_city'] = $request->city;
        $data['customer_country'] = $request->country;
        $data['customer_zip_code'] = $request->zip_code;

        DB::table('customers')
            ->where('customer_id', $customer_id)
            ->update($data);

        return redirect('/');
    }
    
    public function customer_login(Request $request)
    {
        $validated = $request->validate([
            'customer_email' => 'required',
            'password' => 'required',
        ]);
        
        $customer_email = $request->customer_email;
        $password = md5($request->password);

        $result = DB::table('customers')
            ->where('customer_email', $customer_email)
            ->where('password', $password)->first();

        // return $result;
        if ($result == true) {
            Session::put('customer_id', $result->customer_id);
            Session::put('customer_name', $result->customer_name);
            // return redirect($request->session()->get('url.intended'));
            return redirect('/');
        } else {
            return redirect()->back()->with('error_message', 'Please Fill correct information');
        }
    }
    public function customer_register(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'required',
            'password' => 'required',
        ]);
            

        $emailCheck = DB::table('customers')
        ->where('customer_email', $request->customer_email)
        ->count();
        
        if($emailCheck==1)
        {
            return redirect()->back()->with('duplicate_email_message','This email already in use');
        }
        else
        {
        $data = array();
        $data['customer_name'] = $request->customer_name;
        $data['customer_email'] = $request->customer_email;
        $data['password'] = md5($request->password);


        $customer_id = DB::table('customers')
            ->insertGetId($data);

        Session::put('customer_id', $customer_id);
        Session::put('customer_name', $request->customer_name);
        Session::put('customer_email', $request->customer_email);

        return redirect('/billing/info/page')->with('registration_success_message','Registration successfull,Please we need more info');
        }
    }
}
