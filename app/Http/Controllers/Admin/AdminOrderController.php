<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function user_new_order()
    {
        $orders = order::where('order_status',0)->with('user')->get();
        return view('admin.order.userNewOrder',compact('orders'));
    }

    public function user_order_view($id)
    {
        $order = order::where('id',$id)->with('user')->first();
        return view('admin.order.userOrderView',compact('order'));
    }

    public function user_order_save(Request $request)
    {
        $status = $request->status;

        if ($status == 1)
        {
            $order = order::where('id',$request->orderid)->first();
            $order->order_status = 1;
            $order->save();
            return back()->with('success','Order Delivered');
        }
        elseif ($status == 2)
        {
            $order = order::where('id',$request->orderid)->first();
            $order->order_status = 2;
            $order->save();
            return back()->with('success','Order Rejected');
        }elseif ($status == 3)
        {
            $order = order::where('id',$request->orderid)->first();
            $order->order_status = 3;
            $order->save();
            return back()->with('success','Order Cancel');
        }else{
            return back()->with('success','Order Action Not Set');
        }
    }


    public function user_delivered_order()
    {
        $orders = order::where('order_status',1)->with('user')->get();
        return view('admin.order.useDeliveredOrder',compact('orders'));
    }

    public function user_rejected_order()
    {
        $orders = order::where('order_status',2)->with('user')->get();
        return view('admin.order.useRejectedOrder',compact('orders'));
    }

    public function user_canceled_order()
    {
        $orders = order::where('order_status',3)->with('user')->get();
        return view('admin.order.usecanceledOrder',compact('orders'));
    }
}
