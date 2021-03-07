<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;

class InterfaceController extends Controller
{
    public function tutorial_parts($id)
    {
        $tutorials_parts=DB::table('tutorial_sub_parts')
        ->where('tutorial_id',$id)
        ->get();

        return view('front_end.excercise.excercise_parts',compact('tutorials_parts'));
    }
    public function add_tutorial_parts_page($id)
    {
        $tutorialinfos=DB::table('tutorials')
        ->where('tutorial_id',$id)
        ->first();

        return view('admin.tutorial.add_tutorial_parts_page',compact('tutorialinfos'));
    }
    public function manage_tutorial_page()
    {
        $tutorials=DB::table('tutorials')
        ->join('blog_categories','blog_categories.id','tutorials.tutorial_category_id')
        ->get();

        return view('admin.tutorial.manage_tutorial_page',compact('tutorials'));
    }
    public function add_tutorial_page()
    {
        $pcs=DB::table('blog_categories')
        ->where('publication_status',1)
        ->get();

        return view('admin.tutorial.add_tutorial_page',compact('pcs'));
    }
    public function category_post_page($id)
    {
        $category_posts=DB::table('blog_posts')
        ->where('cat_id',$id)
        ->get();

        $blog_categories=DB::table('blog_categories')
        ->where('publication_status',1)
        ->get();

        return view('front_end.blog.category_blog',compact('category_posts','blog_categories'));

    }
    public function post_details_page($id)
    {
        $post_details=DB::table('blog_posts')
        ->where('post_id',$id)
        ->first();

        $blog_categories=DB::table('blog_categories')
        ->where('publication_status',1)
        ->get();

        return view('front_end.blog.post_details_page',compact('post_details','blog_categories'));
    }
    public function add_blog_post_page()
    {
        $all_blog_categories=DB::table('blog_categories')
        ->where('publication_status',1)
        ->get();

        return view('admin.blog.add_blog_post_page',compact('all_blog_categories'));
    }
    public function manage_blog_category_page()
    {
        $all_categories=DB::table('blog_categories')
        ->get();

        return view('admin.blog.manage_blog_category_page',compact('all_categories'));
    }
    public function add_blog_category_page()
    {
        return view('admin.blog.add_blog_category_page');
    }
    public function link_create_page($id)
    {
        $appointment_details=DB::table('appointments')
        ->where('appointment_id',$id)
        ->first();

        return view('doctor.zoom.create',[
            'appointment_details'=>$appointment_details
            ]);
    }
    public function doctor_login_page()
    {
        return view('doctor.auth.login');
    }
    public function doctor_dashboard()
    {
        return view('doctor.doctor_master');
    }
    public function my_appointment_page()
    {
        $customer_id=Session::get('customer_id');
        $appointment_details=DB::table('appointments')
        ->join('doctors','doctors.doctor_id','appointments.assigned_doctor')
        ->where('customer_id',$customer_id)
        ->get();

        return view('front_end.appoinment.my_appointment',[
            'appointment_details'=>$appointment_details,
            ]);
    }
    public function add_doctor_page()
    {
        return view('admin.doctor.add_doctor');
    }
    public function appointment_list()
    {
        $all_appointments=DB::table('appointments')
        ->join('customers','customers.customer_id','appointments.customer_id')
        ->where('assigned_doctor',null)
        ->orderBy('app_date','asc')
        ->get();

         $all_doctors=DB::table('doctors')
         ->orderBy('checkup_start','asc')
        ->get();
        
        return view('admin.appointment.appointment_list',[
            'all_appointments'=>$all_appointments,
            'all_doctors'=>$all_doctors,
            ]);
    }
    public function appointment_page()
    {
        return view('front_end.appoinment.appoinment');
    }
    public function order_list_page()
    {
        $orderList=DB::table('orders')
        // ->join('customers','')
        ->paginate(10);
        
        return view('admin.order.order',['orderList'=>$orderList]);
    }

    public function manage_medicin_page()
    {
        $all_medicins=DB::table('medicins')
        ->paginate(10);
        // return $all_medicins;
        return view('admin.medicin.manage_medicin',['all_medicins'=>$all_medicins]);
    }
    public function order_page()
    {
        $cartContents = \Cart::getContent();

        return view('front_end.shop.order.order',['cartContents'=>$cartContents]);
    }
    public function shipping_page()
    {
        return view('front_end.shop.shipping.shipping');
    }
    public function billing_page()
    {
        return view('front_end.shop.billing.billing');
    }
    public function customer_registration_page()
    {
        return view('front_end.login_register.register');
    }
    public function customer_login_page()
    {
        return view('front_end.login_register.login');
    }

    public function medicin_cart_show()
    {
        $cartProducts = \Cart::getContent();
        $cartItemNo=count($cartProducts);
        return view(
            'front_end.shop.cart',[
                'cartProducts'=>$cartProducts,
                'cartItemNo'=>$cartItemNo
                ]
        );
    }
    public function cart_show()
    {
        $cartProducts = \Cart::getContent();
        $cartItemNo=count($cartProducts);
        return view(
            'front_end.shop.cart',[
                'cartProducts'=>$cartProducts,
                'cartItemNo'=>$cartItemNo
                ]
        );
    }
    public function product_details_page($id)
    {
        $product_details=DB::table('products')
        ->where('product_id',$id)
        ->first();

        return view('front_end.shop.details.product_details',['product_details'=>$product_details]);
    }
    public function medicin_detils_page($id)
    {
        $medicin_details=DB::table('medicins')
        ->where('medicin_id',$id)
        ->first();

        return view('front_end.shop.details.medicin_details',['medicin_details'=>$medicin_details]);
    }
    public function all_product_page()
    {
        $product_categories=DB::table('product_categories')
        ->where('product_publication_status',1)
        ->get();
        
        $medicin_categories=DB::table('medicin_categories')
        ->where('medicin_publication_status',1)
        ->get();

        $all_products=DB::table('products')
        ->get();

        return view('front_end.shop.all_products',[
            'product_categories'=>$product_categories,
            'medicin_categories'=>$medicin_categories,
            'all_products'=>$all_products,
            ]);
    }
    public function category_product_page($category_id)
    {
        $product_categories=DB::table('product_categories')
        ->where('product_publication_status',1)
        ->get();
        
        $medicin_categories=DB::table('medicin_categories')
        ->where('medicin_publication_status',1)
        ->get();

        $category_products=DB::table('products')
        ->where('product_category_id',$category_id)
        ->get();

        return view('front_end.shop.category_product',[
            'product_categories'=>$product_categories,
            'medicin_categories'=>$medicin_categories,
            'category_products'=>$category_products
            ]);
    }
    public function category_medicin_page($id)
    {
        $product_categories=DB::table('product_categories')
        ->where('product_publication_status',1)
        ->get();
        
        $medicin_categories=DB::table('medicin_categories')
        ->where('medicin_publication_status',1)
        ->get();

        $category_medicins=DB::table('medicins')
        ->where('medicin_category',$id)
        ->get();

        return view('front_end.shop.category_medicin',[
            'product_categories'=>$product_categories,
            'medicin_categories'=>$medicin_categories,
            'category_medicins'=>$category_medicins,
            ]);
    }
    public function add_product_page()
    {
        $all_product_categories=DB::table('product_categories')
        ->where('product_publication_status',1)
        ->get();
        
        return view('admin.product.add_product',['all_product_categories'=>$all_product_categories]);
    }
    public function manage_product_category_page()
    {
        $all_product_categories=DB::table('product_categories')
        ->paginate(10);

        return view('admin.product.manage_product_category',['all_product_categories'=>$all_product_categories]);
    }

    public function add_medicin_page()
    {
        $medicin_categories=DB::table('medicin_categories')
        ->where('medicin_publication_status',1)
        ->get();

        return view('admin.medicin.add_medicin',['medicin_categories'=>$medicin_categories]);
    }
    public function add_product_category_page()
    {
        return view('admin.product.add_product_category');
    }
    public function manage_medicin_category_page()
    {
        $all_category=DB::table('medicin_categories')
        ->get();

        return view('admin.medicin.manage_medicin_category',['all_category'=>$all_category]);
    }
    public function shop()
    {
        $all_medicins=DB::table('medicins')
        ->where('medicin_publication_status',1)
        ->get();

        $medicin_categories=DB::table('medicin_categories')
        ->where('medicin_publication_status',1)
        ->get();

        $product_categories=DB::table('product_categories')
        ->get();
    
        return view('front_end.shop.all_product',
            ['medicin_categories'=>$medicin_categories,
            'product_categories'=>$product_categories,
            'all_medicins'=>$all_medicins,
            ]
        );
    }
    public function our_team()
    {
        return view('front_end.our_team.our_team');
    }
    public function excercise()
    {
        $tutorials=DB::table('tutorials')
        ->where('publication_status',1)
        ->paginate(10);

        return view('front_end.excercise.excercise',compact('tutorials'));
    }
    public function home()
    {
        return view('front_end.home.home_content');
    }
    public function blog_page()
    {
        $blog_categories=DB::table('blog_categories')
        ->where('publication_status',1)
        ->get();

        $all_posts=DB::table('blog_posts')
        ->where('publication_status',   1)
        ->get();

        return view('front_end.blog.blog',compact('blog_categories','all_posts'));
    }
}
