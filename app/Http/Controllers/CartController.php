<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class CartController extends Controller
{
    public function delete_cart($product_id)
    {
        \Cart::remove($product_id);
        return redirect('/cart/show');
    }
    public function cart_qty_update(Request $request,$product_id)
    {
        \Cart::update($product_id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
            ),
          ));

        return redirect('/cart/show');
    }
    public function add_to_cart_medicin(Request $request)
    {
        $medicin_id=$request->medicin_id;
        // return $medicin_id;
        $medicin=DB::table('medicins')
        ->where('medicin_id',$medicin_id)
        ->first();

        // $customer_id = Session::get('customer_id');
        // return $customer_id;
            $cartProducts=\Cart::add(array(
            'id' =>$request->medicin_id,
            'name' => $medicin->medicin_name,
            'price' => $medicin->medicin_price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image'=>$medicin->medicin_image
            )
        ));
        // dd($cartProducts);
     return redirect('/cart/show');
    }
    public function add_to_cart(Request $request)
    {
        $product=DB::table('products')
        ->where('product_id',$request->product_id)
        ->first();

        // $customer_id = Session::get('customer_id');
        // return $customer_id;
            $cartProducts=\Cart::add(array(
            'id' =>$request->product_id,
            'name' => $product->product_name,
            'price' => $product->product_price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image'=>$product->product_image
            )
        ));
        // dd($cartProducts);
     return redirect('/cart/show');
    }

}
