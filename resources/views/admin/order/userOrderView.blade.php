@extends('layouts.admin')
@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">User Order Details</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">

            <div class="card-box">

                <form class="parsley-examples" action="{{route('admin.user.order.save')}}" method="post" novalidate="">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="userName">User Name<span class="text-danger">*</span></label>
                            <input type="text" name="nick" value="{{$order->user->first_name}} {{$order->user->last_name}}" readonly parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                            <input type="hidden" name="orderid" value="{{$order->id}}" readonly parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userName">User Phone<span class="text-danger">*</span></label>
                            <input type="text" name="nick" value="{{$order->user->phone}}" readonly parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userName">Order Id<span class="text-danger">*</span></label>
                            <input type="text" name="nick" value="{{$order->order_id}}" readonly parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="userName">Total Amount<span class="text-danger">*</span></label>
                            <input type="text" name="nick" value="{{$order->order_total}}" readonly parsley-trigger="change" required="" placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="userName">Order Status<span class="text-danger">*</span></label>
                            <select class="form-control" name="status">
                                <option value="0" {{$order->order_status == 0 ? 'selected' : ''}}>Pending</option>
                                <option value="1" {{$order->order_status == 1 ? 'selected' : ''}}>Deliver</option>
                                <option value="2" {{$order->order_status == 2 ? 'selected' : ''}}>Reject</option>
                                <option value="3" {{$order->order_status == 3 ? 'selected' : ''}}>Cancel</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group text-left mb-0">
                        <button class="btn btn-gradient waves-effect waves-light" type="submit">
                            Submit
                        </button>
                    </div>

                </form>
            </div> <!-- end card-box -->
        </div>
        <!-- end col -->
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title">Order Details</h4>
                <div class="table-responsive">

                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Qty</th>
                            <th>Product Size</th>
                            <th>Product Color</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $order_details = \App\order_detail::where('order_id',$order->id)
                            ->with('product')
                            ->get();
                        ?>
                        @foreach($order_details as $ordetails)
                            <tr>
                                <th scope="row">{{$ordetails->product->product_name}}</th>
                                <td>{{$ordetails->qty}}</td>
                                <td>
                                    @if (!empty($ordetails->size_id))
                                        {{$ordetails->size->size_name}}
                                    @else
                                        Product Not Have Size
                                    @endif
                                </td>
                                <td>
                                    @if (!empty($ordetails->color_id))
                                        {{$ordetails->color->color_name}}
                                    @else
                                        Product Not Have Color
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

@stop
