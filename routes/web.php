<?php

use Illuminate\Support\Facades\Route;
//Doctor Route Start

// Get list of meetings.
Route::get('/meetings', 'Zoom\MeetingController@list');

// Get information of the meeting room by ID.

// Route::get('/meetings/{id}', 'Zoom\MeetingController@get')->where('id', '[0-9]+');
// Route::patch('/meetings/{id}', 'Zoom\MeetingController@update')->where('id', '[0-9]+');
// Route::delete('/meetings/{id}', 'Zoom\MeetingController@delete')->where('id', '[0-9]+');

// Create meeting room using topic, agenda, start_time.
Route::post('/meetings', 'Zoom\MeetingController@create')->name('create')->middleware('doctorMiddleware');

Route::get('/delete/appointment/{appointment_id}', 'Zoom\MeetingController@delete_appointment')->name('delete_appointment')->middleware('doctorMiddleware');
Route::get('/share/joining/link/{appointment_id}', 'Zoom\MeetingController@share_joining_link')->name('share_joining_link')->middleware('doctorMiddleware');
Route::get('/link/create/page/{appointment_id}', 'InterfaceController@link_create_page')->name('link_create_page')->middleware('doctorMiddleware');
Route::get('/doctor/appointment/list', 'AppoinmentController@doctor_appointment_list')->name('doctor_appointment_list')->middleware('doctorMiddleware');
Route::post('/doctor/login/access', 'DoctorLoginController@doctor_login')->name('doctor_login');
Route::get('/doctor/dashboard', 'InterfaceController@doctor_dashboard')->name('doctor_dashboard');
Route::get('/doctor/login', 'InterfaceController@doctor_login_page')->name('doctor_login_page');
Route::post('/doctor/logout', 'DoctorLoginController@doctor_logout')->name('doctor_logout');
//Doctor Route End

//Admin Dashboard Interface

Route::post('/save/tutorials', 'TutorialController@save_tutorials')->name('save_tutorials')->middleware('auth');
Route::get('/delete/tutorial/{tutorial_id}', 'TutorialController@delete_tutorial')->name('delete_tutorial')->middleware('auth');
Route::get('/publish/tutorial/{tutorial_id}', 'TutorialController@unpublish_tutorial')->name('unpublish_tutorial')->middleware('auth');
Route::get('/unpublish/tutorial/{tutorial_id}', 'TutorialController@publish_tutorial')->name('publish_tutorial')->middleware('auth');
Route::get('/add/tutorial/parts/page/{id}', 'InterfaceController@add_tutorial_parts_page')->name('add_tutorial_parts_page')->middleware('auth');
Route::get('/manage/tutorial/page', 'InterfaceController@manage_tutorial_page')->name('manage_tutorial_page')->middleware('auth');
Route::post('/add/tutorial', 'TutorialController@add_tutorial')->name('add_tutorial')->middleware('auth');
Route::get('/add/tutorial/page', 'InterfaceController@add_tutorial_page')->name('add_tutorial_page')->middleware('auth');
Route::post('/add/blog/post/', 'BlogController@add_blog_post')->name('add_blog_post')->middleware('auth');
Route::get('/add/blog/post/page', 'InterfaceController@add_blog_post_page')->name('add_blog_post_page')->middleware('auth');
Route::get('/delete/blog/category/{id}', 'BlogController@delete_blog_category')->name('delete_blog_category')->middleware('auth');
Route::get('/publish/blog/category/{id}', 'BlogController@published_blog_category')->name('published_blog_category')->middleware('auth');
Route::get('/unpublish/blog/category/{id}', 'BlogController@unpublished_blog_category')->name('unpublished_blog_category')->middleware('auth');
Route::get('/manage/blog/category', 'InterfaceController@manage_blog_category_page')->name('manage_blog_category_page')->middleware('auth');
Route::post('/add/blog/category', 'BlogController@add_blog_category')->name('add_blog_category')->middleware('auth');
Route::get('/add/blog/category/page', 'InterfaceController@add_blog_category_page')->name('add_blog_category_page')->middleware('auth');
Route::post('/doctor/assign/{appointment_id}', 'DoctorController@assign_to_doctor')->name('assign_to_doctor')->middleware('auth');
Route::post('/add/doctor/page', 'DoctorController@add_doctor')->name('add_doctor')->middleware('auth');
Route::get('/add/doctor/page', 'InterfaceController@add_doctor_page')->name('add_doctor_page')->middleware('auth');
Route::get('/appointment/list', 'InterfaceController@appointment_list')->name('appointment_list')->middleware('auth');
Route::get('/order/delivery/{order_id}', 'OrderController@order_delivery')->name('order_delivery')->middleware('auth');
Route::get('/order/shift/{order_id}', 'OrderController@order_shift')->name('order_shift')->middleware('auth');
Route::get('/order/pending/{order_id}', 'OrderController@order_pending')->name('order_pending')->middleware('auth');
Route::get('/order/list/page/', 'InterfaceController@order_list_page')->name('order_list_page')->middleware('auth');
Route::get('/publish/product/{product_category_id}', 'MedicinController@publish_product_category')->name('publish_product_category')->middleware('auth');
Route::get('/publish/medicin/{medicin_id}', 'MedicinController@publish_medicin')->name('publish_medicin')->middleware('auth');
Route::get('/unpublish/product/{product_category_id}', 'ProductController@unpublish_product_category')->name('unpublish_product_category')->middleware('auth');
Route::get('/unpublish/medicin/{medicin_id}', 'MedicinController@unpublish_medicin')->name('unpublish_medicin')->middleware('auth');
Route::get('/delete/product/category/{product_category_id}', 'ProductController@delete_product_category')->name('delete_product_category')->middleware('auth');
Route::get('/delete/medicin/{medicin_id}', 'MedicinController@delete_medicin')->name('delete_medicin')->middleware('auth');
Route::get('/manage/medicin/page', 'InterfaceController@manage_medicin_page')->name('manage_medicin_page')->middleware('auth');
Route::get('/delete/medicin/category/{category_id}', 'MedicinController@delete_medicin_category')->name('delete_medicin_category')->middleware('auth');
Route::get('/publish/medicin/category/{category_id}', 'MedicinController@publish_medicin_category')->name('publish_medicin_category')->middleware('auth');
Route::get('/unpublish/medicin/category/{category_id}', 'MedicinController@unpublish_medicin_category')->name('unpublish_medicin_category')->middleware('auth');
Route::post('/add/product', 'ProductController@add_product')->name('add_product')->middleware('auth');
Route::get('/add/product/page', 'InterfaceController@add_product_page')->name('add_product_page')->middleware('auth');
Route::post('/add/medicin', 'MedicinController@add_medicin')->name('add_medicin')->middleware('auth');
Route::get('/add/medicin/page', 'InterfaceController@add_medicin_page')->name('add_medicin_page')->middleware('auth');
Route::get('/manage/product/category/page', 'InterfaceController@manage_product_category_page')->name('manage_product_category_page')->middleware('auth');
Route::post('/add/product/category', 'ProductController@add_product_category')->name('add_product_category')->middleware('auth');
Route::get('/add/product/category/page', 'InterfaceController@add_product_category_page')->name('add_product_category_page')->middleware('auth');
Route::get('/manage/medicin/category', 'InterfaceController@manage_medicin_category_page')->name('manage_medicin_category_page')->middleware('auth');
Route::post('/add/medicin/category', 'MedicinController@add_medicin_category')->name('add_medicin_category')->middleware('auth');
Route::get('/add/category/page', 'MedicinController@add_medicin_category_page')->name('add_medicin_category_page')->middleware('auth');
Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard')->middleware('auth');

//Admin Dashboard interface end

///User Interface
Route::get('/tutorial/parts/{tutorial_id}', 'InterfaceController@tutorial_parts')->name('tutorial_parts');
Route::get('/category/post/page/{id}', 'InterfaceController@category_post_page')->name('category_post_page');
Route::get('/post/details/page/{id}', 'InterfaceController@post_details_page')->name('post_details_page');
Route::get('/cancle/appoinment/{appointment_id}', 'AppoinmentController@cancle_appointment')->name('cancle_appointment')->middleware('customerMiddleware');
Route::get('/my/appoinment', 'InterfaceController@my_appointment_page')->name('my_appointment_page')->middleware('customerMiddleware');
Route::post('/appoinment/submit', 'AppoinmentController@appointment_submit')->name('appointment_submit')->middleware('customerMiddleware');
Route::get('/make/appoinment', 'InterfaceController@appointment_page')->name('appointment_page')->middleware('customerMiddleware');
Route::get('/place/order', 'OrderController@place_order')->name('place_order')->middleware('customerMiddleware');
Route::get('/order/page', 'InterfaceController@order_page')->name('order_page')->middleware('customerMiddleware');
Route::post('/save/shipping', 'CustomerController@save_shipping')->name('save_shipping')->middleware('customerMiddleware');
Route::get('/shipping/page', 'InterfaceController@shipping_page')->name('shipping_page')->middleware('customerMiddleware');
Route::get('/customer/logout', 'CustomerController@customer_logout')->name('customer_logout')->middleware('customerMiddleware');
Route::post('/billing/update', 'CustomerController@update_billing')->name('update_billing')->middleware('customerMiddleware');
Route::get('/billing/info/page', 'InterfaceController@billing_page')->name('billing_page');
Route::post('/customer/login', 'CustomerController@customer_login')->name('customer_login');
Route::post('/customer/register', 'CustomerController@customer_register')->name('customer_register');
Route::get('/customer/registeration/page', 'InterfaceController@customer_registration_page')->name('customer_registration_page');
Route::get('/customer/login/page', 'InterfaceController@customer_login_page')->name('customer_login_page');
Route::get('/cart/delete/{product_id}', 'CartController@delete_cart')->name('delete_cart');
Route::post('/cart/quantity/update/{id}', 'CartController@cart_qty_update')->name('cart_qty_update');
Route::get('/medicin/cart/show', 'InterfaceController@medicin_cart_show')->name('medicin_cart_show');
Route::get('/cart/show', 'InterfaceController@cart_show')->name('cart_show');
Route::post('/add/cart/medicin', 'CartController@add_to_cart_medicin')->name('add_to_cart_medicin');
Route::post('/add/cart', 'CartController@add_to_cart')->name('add_to_cart');
Route::get('/product/details/{product_id}', 'InterfaceController@product_details_page')->name('product_details_page');
Route::get('/medicin/details/{medicin_id}', 'InterfaceController@medicin_detils_page')->name('medicin_detils_page');
Route::get('/category/product/{category_id}', 'InterfaceController@category_product_page')->name('category_product_page');
Route::get('/all/products', 'InterfaceController@all_product_page')->name('all_product_page');
Route::get('/category/medicin/{category_id}', 'InterfaceController@category_medicin_page')->name('category_medicin_page');
Route::get('/shop', 'InterfaceController@shop')->name('shop_page');
Route::get('/team/members', 'InterfaceController@our_team')->name('our_team_page');
Route::get('/excercise', 'InterfaceController@excercise')->name('excercise');
Route::get('/blog/page', 'InterfaceController@blog_page')->name('blog_page');
Route::get('/', 'InterfaceController@home')->name('/');

// Route::get('/', function () {
//     return view('master');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
