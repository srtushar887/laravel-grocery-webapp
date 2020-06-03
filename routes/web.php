<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontendController@index')->name('front');
Route::get('/about-us', 'FrontendController@about_us')->name('aboutus');
Route::get('/shop', 'FrontendController@shop')->name('shop');
Route::get('/product-view/{id}', 'FrontendController@product_view')->name('product.view');
Route::get('/add-to-cart-single/{id}', 'FrontendController@add_to_cart_single')->name('add.to.cart.single');
Route::get('/privacy-policy', 'FrontendController@privacy_policy')->name('pricacy.policy');
Route::get('/terms-and-conditions', 'FrontendController@tremas_condition')->name('trems');
Route::get('/support-policy', 'FrontendController@support_policy')->name('support.policy');
Route::get('/contact-us', 'FrontendController@contact_us')->name('contact.us');
Route::post('/contact-us-save', 'FrontendController@contact_us_save')->name('contact.message.send');


Route::get('/product-category/{id}/{name}', 'FrontendController@category_product')->name('category.product');
Route::get('/product-brand/{id}/{name}', 'FrontendController@brand_product')->name('brand.product');


//filter product
Route::post('/get-all-product', 'FrontendFilterController@filter_product')->name('get.all.product.by.filter');
Route::get('/get-all-product', 'FrontendFilterController@filter_product_get');


//forgot password
Route::get('/forgot-password', 'FrontendController@forgot_password')->name('forgot.password');
Route::post('/forgot-password-save', 'FrontendController@forgot_password_save')->name('forgot.password.save');
Route::get('/forgot-password-code', 'FrontendController@forgot_password_code')->name('user.fortgot.code');
Route::post('/forgot-password-code-save', 'FrontendController@forgot_password_code_save')->name('forgot.password.code.save');
Route::get('/forgot-password-change/{code}', 'FrontendController@forgot_password_cahnage')->name('user.pass.change.page');
Route::post('/forgot-password-change-save', 'FrontendController@forgot_password_cahnage_save')->name('forgot.password.change.save');



//scoail login
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');



Auth::routes();


Route::group(['middleware' => ['auth']], function() {
    Route::group(['prefix' => 'home'], function ()
    {
        Route::get('/', 'HomeController@index')->name('home');

        //order history
        Route::get('/order-history', 'User\UserProfileController@order_history')->name('user.order.history');

        //profile
        Route::get('/profile', 'User\UserProfileController@profile')->name('user.profile');
        Route::post('/profile-update', 'User\UserProfileController@profile_update')->name('user.profile.update');


        //chnage pass
        Route::get('/change-password', 'User\UserProfileController@chnage_pass')->name('user.change.pass');
        Route::post('/change-password-save', 'User\UserProfileController@chnage_pass_save')->name('user.password.update');

        //checkout
        Route::get('/checkout', 'User\UserProfileController@check_out')->name('user.checkout');
        Route::post('/checkout-save', 'User\UserProfileController@check_out_save')->name('user.checkoit.save');
    });
});





Route::prefix('admin')->group(function (){
    Route::get('/login', 'Auth\AdminLoginController@showLoginform')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::group(['middleware' => ['auth:admin']], function() {
    Route::prefix('admin')->group(function() {
        Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');

        //general setting
        Route::get('/general-settings', 'Admin\AdminController@general_setting')->name('admin.general.settings');
        Route::post('/general-settings-update', 'Admin\AdminController@general_setting_save')->name('admin.general.setting.update');

        //top category
        Route::get('/category', 'Admin\AdminCategoryController@top_category')->name('admin.top.category');
        Route::post('/category-save', 'Admin\AdminCategoryController@top_category_save')->name('admin.create.topcat');
        Route::post('/category-update', 'Admin\AdminCategoryController@top_category_update')->name('admin.update.topcat');
        Route::post('/category-delete', 'Admin\AdminCategoryController@top_category_delete')->name('admin.delete.topcat');


        //brand
        Route::get('/product-brand', 'Admin\AdminCategoryController@product_brand')->name('admin.product.brand');
        Route::post('/product-brand-save', 'Admin\AdminCategoryController@product_brand_save')->name('admin.create.brand');
        Route::post('/product-brand-update', 'Admin\AdminCategoryController@product_brand_update')->name('admin.update.brand');
        Route::post('/product-brand-delete', 'Admin\AdminCategoryController@product_brand_delete')->name('admin.delete.brand');


        //product
        Route::get('/product', 'Admin\AdminProductController@product')->name('admin.product');
        Route::get('/product-create', 'Admin\AdminProductController@product_create')->name('admin.create.product');
        Route::post('/product-save', 'Admin\AdminProductController@product_save')->name('admin.save.product');
        Route::get('/product-update/{id}', 'Admin\AdminProductController@product_view')->name('admin.product.update');
        Route::post('/product-update-save', 'Admin\AdminProductController@product_update_save')->name('admin.update.product');
        Route::post('/product-delete', 'Admin\AdminProductController@product_delete')->name('admin.delete.product');
        Route::post('/product-size-edit-delete', 'Admin\AdminProductController@product_size_edit_delete')->name('admin.delete.size.edit.data');
        Route::post('/product-color-edit-delete', 'Admin\AdminProductController@product_color_edit_delete')->name('admin.delete.color.edit.data');




        //user order
        Route::get('/user-new-order', 'Admin\AdminOrderController@user_new_order')->name('admin.user.new.order');
        Route::get('/user-order-view/{id}', 'Admin\AdminOrderController@user_order_view')->name('user.order.view');
        Route::post('/user-order-save', 'Admin\AdminOrderController@user_order_save')->name('admin.user.order.save');
        Route::get('/user-delivered-order', 'Admin\AdminOrderController@user_delivered_order')->name('admin.user.delivered.order');
        Route::get('/user-rejected-order', 'Admin\AdminOrderController@user_rejected_order')->name('admin.user.rejected.order');
        Route::get('/user-canceled-order', 'Admin\AdminOrderController@user_canceled_order')->name('admin.user.canceled.order');




        //frontend control
        Route::get('/home-slider', 'Admin\AdminFrontendController@home_slider')->name('admin.home.slider');
        Route::post('/home-slider-save', 'Admin\AdminFrontendController@home_slider_save')->name('admin.slider.save');
        Route::post('/home-slider-update', 'Admin\AdminFrontendController@home_slider_update')->name('admin.slider.update');
        Route::post('/home-slider-delete', 'Admin\AdminFrontendController@home_slider_delete')->name('admin.slider.delete');

        //static data
        Route::get('/static-data', 'Admin\AdminFrontendController@static_data')->name('admin.static.data');
        Route::post('/static-data-update', 'Admin\AdminFrontendController@static_data_update')->name('admin.static.update');

        //contact us messages
        Route::get('/contact-us-messages', 'Admin\AdminFrontendController@contact_us_messages')->name('admin.contactus.messages');



    });
});
