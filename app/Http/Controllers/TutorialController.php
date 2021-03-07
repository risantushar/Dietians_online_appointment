<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Image;
use App\TutorialSubPart;
use App\Tutorial;

class TutorialController extends Controller
{
    public function save_tutorials(Request $request)
    {
         // return $request->all();
         foreach($request->sub_tutorial_title as $key=>$sub_tutorial_title)
         {
             $data=new TutorialSubPart();
             $data->tutorial_id=$request->tutorial_id;
             $data->sub_tutorial_title=$sub_tutorial_title;
             $data->sub_tutorial_link=$request->sub_tutorial_link[$key];
             $data->save();
         }
         return redirect()->back()->with('save_message','Parts are uploaded successfully');
    }

    public function delete_tutorial($id)
    {
        $delete_tutorial=DB::table('tutorials')
        ->where('tutorial_id',$id)
        ->delete();

        return redirect()->back()->with('delete_message',"Tutorial deleted successfully");
    }
    public function publish_tutorial($id)
    {
        $publish_tutorial=DB::table('tutorials')
        ->where('tutorial_id',$id)
        ->update(['publication_status'=>1]);

        return redirect()->route('manage_tutorial_page')->with('publish_message',"Tutorial publish successfully");
    }
    public function unpublish_tutorial($id)
    {
        $unpublish_tutorial=DB::table('tutorials')
        ->where('tutorial_id',$id)
        ->update(['publication_status'=>0]);

        return redirect()->route('manage_tutorial_page')->with('unpublish_message',"Tutorial unpublish successfully");
    }
    protected function tutorial_thumbnailImageProcessing(Request $request)
    {
            $tutorial_thumbnailImage = $request->file('tutorial_thumbnail');
            $fileType = $tutorial_thumbnailImage->getClientOriginalExtension();
            $imageName = $request->tutorial_title.'.'.$fileType;
            $directory = 'uploads/tutorial_thumbnails/';
            $tutorial_thumbnail_imageUrl=$directory.$imageName;

            Image::make($tutorial_thumbnailImage)->save($tutorial_thumbnail_imageUrl);
            return $tutorial_thumbnail_imageUrl;
    }

    protected function savePostBasicInfo(Request $request,$tutorial_thumbnail_imageUrl)
    {
        //OBJECT CREATE
        $Tutorial = new Tutorial();

        //STROE PRODUCT INTO DATABASE
       $Tutorial->tutorial_category_id=$request->tutorial_category_id;
        $Tutorial->tutorial_title=$request->tutorial_title;
        $Tutorial->tutorial_description=$request->tutorial_description;
        $Tutorial->tutorial_thumbnail=$tutorial_thumbnail_imageUrl;
        $Tutorial->tutorial_video=$request->tutorial_video;
        $Tutorial->publication_status=$request->publication_status;
        $Tutorial->save();
    }

    public function add_tutorial(Request $request)
    {
        $tutorial_thumbnail_imageUrl=$this->tutorial_thumbnailImageProcessing($request);
        $this->savePostBasicInfo($request,$tutorial_thumbnail_imageUrl);

        return redirect('/manage/tutorial/page');
    }
}
