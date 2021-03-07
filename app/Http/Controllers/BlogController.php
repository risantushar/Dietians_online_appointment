<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Image;

class BlogController extends Controller
{

    protected function postImageProcessing(Request $request)
    {
            $postImage = $request->file('post_image');
            $fileType = $postImage->getClientOriginalExtension();
            $imageName = $request->post_title.'.'.$fileType;
            $directory = 'uploads/post_images/';
            $imageUrl=$directory.$imageName;

            Image::make($postImage)->save($imageUrl);
            return $imageUrl;
    }

    protected function insertPostInfo($request,$imageUrl)
    {
        $newPostId=DB::table('blog_posts')->insertGetId([
            'post_title'=>$request->post_title,
            'post_description'=>$request->post_description,
            'publication_status'=>$request->publication_status,
            'cat_id'=>$request->post_category,
            'post_image'=>$imageUrl
         ]);
    }

    public function add_blog_post(Request $request)
    {
       
        $imageUrl=$this->postImageProcessing($request);
        $this->insertPostInfo($request,$imageUrl);
        return redirect('/add/blog/post/page')->with('post_add_message','Post added sucessfully');

    }
    public function delete_blog_category($id)
    {
        $delete_blog_category=DB::table('blog_categories')
        ->where('id',$id)
        ->delete();

        return redirect()->back()->with('delete_message',"Category deleted successfully");
    }
    public function published_blog_category($id)
    {
        $published_blog_category=DB::table('blog_categories')
        ->where('id',$id)
        ->update([
            'publication_status'=>1
        ]);

        return redirect()->back()->with('publish_message',"Category published successfully");
    }
    public function unpublished_blog_category($id)
    {
        $unpublished_blog_category=DB::table('blog_categories')
        ->where('id',$id)
        ->update([
            'publication_status'=>0
        ]);

        return redirect()->back()->with('unpublish_message',"Category unpublish successfully");
    }

    public function add_blog_category(Request $request)
    {
        // return $request->all();

        $add_blog_category=DB::table('blog_categories')
        ->insert([
            'blog_category_name'=>$request->category_name,
            'blog_category_decription'=>$request->category_description,
            'publication_status'=>$request->publication_status,
        ]);

        return redirect()->back()->with('category_add_message','Category added successfully!');
    }
}
