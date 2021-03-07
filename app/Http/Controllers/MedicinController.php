<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Intervention\Image\ImageManager;
use Intervention\Image\Facades\Image;

class MedicinController extends Controller
{
    public function publish_product_category($id)
    {
        $publish_product_category=DB::table('product_categories')
        ->where('product_id',$id)
        ->update([
            'product_publication_status'=>1
            ]);
            return redirect('/manage/product/category/page')->with('publish_message','Published successfully');
    }
    public function publish_medicin($id)
    {
        $publishMedicin=DB::table('medicins')
        ->where('medicin_id',$id)
        ->update([
            'medicin_publication_status'=>1
        ]);
        return redirect('/manage/medicin/page')->with('publish_message','Published successfully');
    }
    public function unpublish_medicin($id)
    {
        $unpublishMedicin=DB::table('medicins')
        ->where('medicin_id',$id)
        ->update([
            'medicin_publication_status'=>0
        ]);
        return redirect('/manage/medicin/page')->with('unpublish_message','Unpublished successfully');
    }
    
    public function delete_medicin($id)
    {
        $deleteMedicin=DB::table('medicins')
        ->where('medicin_id',$id)
        ->delete();

        return redirect('/manage/medicin/page')->with('delete_message','Delete successfully');
    }
    public function delete_medicin_category($id)
    {
        $deleteCategory=DB::table('medicin_categories')
        ->where('id',$id)
        ->delete();

        return redirect('/manage/medicin/category')->with('delete_message','Delete successfully');
    }
    public function publish_medicin_category($id)
    {
        $publishCategory=DB::table('medicin_categories')
        ->where('id',$id)
        ->update([
            'medicin_publication_status'=>1
        ]);
        return redirect('/manage/medicin/category')->with('publish_message','Published successfully');
    }
    public function unpublish_medicin_category($id)
    {
        $unpublishCategory=DB::table('medicin_categories')
        ->where('id',$id)
        ->update([
            'medicin_publication_status'=>0
        ]);
        return redirect('/manage/medicin/category')->with('unpublish_message','Unpublished successfully');
    }
     protected function medicinImage(Request $request)
    {
            $medicinImage = $request->file('medicin_image');
            $fileType = $medicinImage->getClientOriginalExtension();
            $imageName = $request->medicin_name.'.'.$fileType;
            $directory = 'uploads/medicin_images/';
            $medicinImage_imageUrl=$directory.$imageName;

            Image::make($medicinImage)->save($medicinImage_imageUrl);
            return $medicinImage_imageUrl;
    }
    public function add_medicin(Request $request)
    {

        $medicinImageUrl=$this->medicinImage($request);
        $medicin_name=$request->medicin_name;

        $medicin_name_check=DB::table('medicins')
        ->where('medicin_name',$medicin_name)
        ->first();

        if($medicin_name_check==true){
            return redirect()->back()->with('add_error_message','Duplicate Entry');
        }
        else
        {
            $newMedicin=DB::table('medicins')->insert([
                'medicin_category'=> $request->medicin_category_name,
                'medicin_name'=> $request->medicin_name,
                'medicin_code'=> $request->medicin_code,
                'medicin_description' => $request->medicin_description,
                'medicin_price' => $request->medicin_price,
                'medicin_mg' => $request->medicin_mg,
                'medicin_image' => $medicinImageUrl,
                'medicin_publication_status'=> $request->medicin_publication_status
            ]);
        return redirect()->back()->with('add_success_message','Added successfully');
        }
    }
    public function add_medicin_category(Request $request)
    {
        $newCategory=DB::table('medicin_categories')->insert([
            'medicin_category_name'=> $request->medicin_category_name,
            'medicin_category_description' => $request->medicin_category_description,
            'medicin_publication_status'=> $request->medicin_publication_status
        ]);

        return redirect()->back();
    }
    public function add_medicin_category_page()
    {
        return view('admin.medicin.add_medicin_category');
    }
}
