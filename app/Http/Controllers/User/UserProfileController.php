<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\order;
use App\order_detail;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class UserProfileController extends Controller
{
    public function profile_update(Request $request)
    {
        $user = User::where('id',Auth::user()->id)->first();
        if($request->hasFile('photo')){
            @unlink($user->photo);
            $image = $request->file('photo');
            $imageName = $user->id.uniqid().'.'.$image->getClientOriginalName('photo');
            $directory = 'assets/frontend/image/user/';
            $imgUrl  = $directory.$imageName;
            Image::make($image)->save($imgUrl);
            $user->photo = $imgUrl;
        }

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->postal_code = $request->postal_code;
        $user->zip_code = $request->zip_code;
        $user->save();

        return back()->with('success','Profile successfully updated');


    }


    public function chnage_pass()
    {
        return view('user.changePass');
    }

    public function chnage_pass_save(Request $request)
    {
        $npass = $request->npass;
        $cpass = $request->cpass;


        if ($npass != $cpass)
        {
            return back()->with('alert','Password Not Match');
        }else{
            $user = User::where('id',Auth::user()->id)->first();
            $user->password = Hash::make($npass);
            $user->save();
            return back()->with('success','Password Successfully Changed');
        }

    }


    public function check_out()
    {
        return view('user.checkOut');
    }

    public function check_out_save(Request $request)
    {
        $this->validate($request,[
           'first_name' => 'required',
           'last_name' => 'required',
           'phone' => 'required',
           'city' => 'required',
           'postal_code' => 'required',
           'zip_code' => 'required',
           'address' => 'required',
        ]);

//        \Stripe\Stripe::setVerifySslCerts(false);
        \Stripe\Stripe::setApiKey('sk_test_Rc3ItpcRMziLqT8XyLO0qesh00RYg0WFJi');

        $price = $request->total_price;
        $token =  $request->stripeToken;
        $charge = \Stripe\Charge::create([
            'amount' => $price * 100 ,
            'currency' => 'usd',
            'source' => $token,
        ]);


        if($charge['status'] == 'succeeded'){

            $order = new order();
            $order->user_id = Auth::user()->id;
            $order->order_id = Auth::user()->id.rand(000000,999999);
            $order->payment_type = "Card Payment";
            $order->order_total = $request->total_price;
            $order->order_status = 0;

            if ($order->save()){
                $cards = Cart::content();
                foreach ($cards as $card){
                    $order_product = new order_detail();
                    $order_product->order_id = $order->id;
                    $order_product->product_id = $card->id;
                    $order_product->product_price = $card->price;
                    $order_product->qty = $card->qty;
                    $order_product->save();

                }
            }
            Cart::destroy();
            return redirect(route('user.order.history'))->with('product_success','Product Order Successfully');

        }


    }


    public function order_history()
    {
        $orders = order::where('user_id',Auth::user()->id)->get();
        return view('user.orderHistory',compact('orders'));
    }


}
