<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\Order;
use App\Order_detail;
use Darryldecode\Cart\Cart;

class OrderController extends Controller
{
   public function order_delivery($id)
   {
       DB::table('orders')
       ->where('order_id',$id)
       ->update([
           'order_status'=>'Deliveried',
           ]);
        return redirect()->back()->with('delivery_message','Order in deliveried');
   }
   public function order_shift($id)
   {
       DB::table('orders')
       ->where('order_id',$id)
       ->update([
           'order_status'=>'Shifted',
           ]);
        return redirect()->back()->with('shift_message','Order in shifted');
   }
   public function order_pending($id)
   {
       DB::table('orders')
       ->where('order_id',$id)
       ->update([
           'order_status'=>'Pending',
           ]);
        return redirect()->back()->with('pending_message','Order in pending');
   }
    public function place_order(Request $request)
    {
        $order = new Order();
        $order->customer_id = Session::get('customer_id');
        $order->shipping_id = Session::get('shipping_id');
        $order->total_price = Session::get('totalAmount');
        $order->payment_status = "Paid";
        $order->save();

        //    return $order->id;
        $cartContents = \Cart::getContent();
        
        foreach ($cartContents as $cartContent) {
            $order_detail = new Order_detail();
            $order_detail->order_id = $order->id;
            $order_detail->shipping_id = Session::get('shipping_id');
            $order_detail->product_id = $cartContent->id;
            $order_detail->product_name = $cartContent->name;
            $order_detail->product_image = $cartContent->attributes->image;
            $order_detail->product_price = $cartContent->price;
            $order_detail->product_quantity = $cartContent->quantity;
            $order_detail->save();
        }
        \Cart::clear();
        return view('front_end.payment.payment');
    }
}
