<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Intervention\Image\ImageManager;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function unpublish_product_category($id)
    {
        $unpublish_product_category=DB::table('product_categories')
        ->where('product_id',$id)
        ->update([
            'product_publication_status'=>0
            ]);
            return redirect('/manage/product/category/page')->with('unpublish_message','Unpublished successfully');
    }
    public function delete_product_category($id)
    {
        $deleteProductCategory=DB::table('product_categories')
        ->where('product_id',$id)
        ->delete();

        return redirect('/manage/product/category/page')->with('delete_message','Delete successfully');
    }
    protected function productImage(Request $request)
    {
            $productImage = $request->file('product_image');
            $fileType = $productImage->getClientOriginalExtension();
            $imageName = $request->productImage.'.'.$fileType;
            $directory = 'uploads/product_images/';
            $productImage_imageUrl=$directory.$imageName;

            Image::make($productImage)->save($productImage_imageUrl);
            return $productImage_imageUrl;
    }

    public function add_product(Request $request)
    {

        $productImageUrl=$this->productImage($request);
        $product_name=$request->product_name;

        $product_name_check=DB::table('products')
        ->where('product_name',$product_name)
        ->first();

        if($product_name_check==true){
            return redirect()->back()->with('add_error_message','Duplicate Entry');
        }
        else
        {
            $newProduct=DB::table('products')->insert([
                'product_category_id'=> $request->product_category_name,
                'product_name'=> $request->product_name,
                'product_description' => $request->product_description,
                'product_price' => $request->product_price,
                'product_image' => $productImageUrl,
                'product_publication_status'=> $request->product_publication_status
            ]);
        return redirect()->back()->with('add_success_message','Added successfully');
        }
    }
    public function add_product_category(Request $request)
    {
        $newProductCategory=DB::table('product_categories')->insert([
            'product_category_name'=> $request->product_category_name,
            'product_category_description' => $request->product_category_description,
            'product_publication_status'=> $request->product_publication_status
        ]);

        return redirect()->back()->with('add_success_message','Added successfully');
    }
}
