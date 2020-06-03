<?php

namespace App\Http\Controllers;

use App\brand;
use App\contact_us;
use App\general_setting;
use App\home_slider;
use App\product;
use App\static_data;
use App\top_category;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    public function index()
    {
        $sliders = home_slider::all();
        $categroies = top_category::all();
        $rand_products = product::where('status',1)->inRandomOrder()->limit(20)->get();
        $best_offer_products = product::where('status',1)->inRandomOrder()->limit(20)->get();
        return view('frontend.index',compact('sliders','categroies','rand_products','best_offer_products'));
    }

    public function about_us()
    {
        $about = static_data::first();
        return view('frontend.aboutUs',compact('about'));
    }

    public function privacy_policy()
    {
        $about = static_data::first();
        return view('frontend.privacyPolicy',compact('about'));
    }

    public function tremas_condition()
    {
        $about = static_data::first();
        return view('frontend.termsCondition',compact('about'));
    }

    public function support_policy()
    {
        $about = static_data::first();
        return view('frontend.supportPolicy',compact('about'));
    }

    public function contact_us()
    {
        return view('frontend.contactUs');
    }

    public function contact_us_save(Request $request)
    {
        $this->validate($request,[
           'name' => 'required',
           'phone' => 'required',
           'email' => 'required',
           'message' => 'required',
        ]);


        $new_contact = new contact_us();
        $new_contact->name = $request->name;
        $new_contact->phone = $request->phone;
        $new_contact->email = $request->email;
        $new_contact->message = $request->message;
        $new_contact->save();

        return back()->with('success','Message Successfully Send');




    }


    public function shop()
    {
        $categories = top_category::all();
        $brands = brand::all();
        return view('frontend.shop',compact('categories','brands'));
    }

    public function product_view($id)
    {
        $product = product::where('id',$id)->first();
        $smilar_product = product::where('status',1)->inRandomOrder()->limit(20)->get();
        return view('frontend.productDetails',compact('product','smilar_product'));
    }


    public function add_to_cart_single($id)
    {
        $product = product::where('id',$id)->first();

        $data['qty'] = 1;
        $data['id'] = $product->id;
        $data['name'] = $product->product_name;
        $data['price'] = $product->new_price;
        $data['weight'] = 550;
        $data['options']['image'] = $product->main_image;

        Cart::add($data);
        return back();


    }


    public function category_product($id,$name)
    {
        $categories = top_category::all();
        $brands = brand::all();
        $id = $id;
        return view('frontend.categoryProduct',compact('categories','brands','id'));
    }

    public function brand_product($id,$name)
    {
        $categories = top_category::all();
        $brands = brand::all();
        $id = $id;
        return view('frontend.brandProduct',compact('categories','brands','id'));
    }

    public function forgot_password()
    {
        return view('auth.forgotPassword');
    }


    public function forgot_password_save(Request $request)
    {
        $this->validate($request,[
           'email'=>'required'
        ]);

        $user = User::where('email',$request->email)->first();
        if ($user){

            $ver_id = $user->id.Str::random(10);
            $user->v_send = $ver_id;
            $user->save();

            $fname = $user->first_name;
            $lname = $user->last_name;
            $to = $user->email;
            $gen = general_setting::first();
            $subject = "Forgot Password Verification";
            $message = "
Dear {$fname} {$lname}

Your Forgot Password Verification Code Bellow.

CODE :  {$ver_id}

Thank you for choosing {$gen->site_name}.


Thanks,
{$gen->site_name}.
";
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
            $headers .= 'From: <webmaster@example.com>' . "\r\n";
            $headers .= 'Cc: myboss@example.com' . "\r\n";

            mail($to,$subject,$message);

            return redirect(route('user.fortgot.code'));


        }else{
            return back()->with('alert','Email Not Found');
        }


    }


    public function forgot_password_code()
    {

        return view('auth.forgotPasswordCode',compact('userid'));
    }

    public function forgot_password_code_save(Request $request)
    {
        $this->validate($request,[
           'code' => 'required'
        ]);

        $user = User::where('v_send',$request->code)->first();
        if ($user){
            return redirect(route('user.pass.change.page',$user->v_send));
        }else{
            return back()->with('alert','Sorry! Code Not Match');
        }


    }


    public function forgot_password_cahnage($code)
    {
        $code = $code;
        return view('auth.forgotPassChange',compact('code'));
    }

    public function forgot_password_cahnage_save(Request $request)
    {
        $this->validate($request,[
           'npass' => 'required',
           'cpass' => 'required',
        ]);

        if ($request->npass != $request->cpass){
            return back()->with('alert','Password Not Match');
        }else{
            $user = User::where('v_send',$request->user_id)->first();
            $user->password = Hash::make($request->npass);
            $user->save();

            return redirect(route('login'))->with('success',"Password Successfully Changed");
        }


    }



}
