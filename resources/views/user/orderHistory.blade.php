@extends('layouts.frontend')
@section('front')
    <section class="account-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="row no-gutters">
                        @include('user.include.menu')
                        <div class="col-md-8">
                            <div class="card card-body account-right">
                                <div class="widget">
                                    <div class="section-header">
                                        <h5 class="heading-design-h5">
                                            Order List
                                        </h5>
                                    </div>
                                    <div class="order-list-tabel-main table-responsive">
                                        <table class="datatabel table table-striped table-bordered order-list-tabel" width="100%" cellspacing="0">
                                            <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Date Purchased</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($orders as $order)
                                            <tr>
                                                <td>{{$order->order_id}}</td>
                                                <td>{{$order->created_at}}</td>
                                                <td>
                                                    @if ($order->order_status == 0)
                                                        <span class="badge badge-primary">Pending</span>
                                                    @elseif($order->order_status == 1)
                                                        <span class="badge badge-success">Delivered</span>
                                                    @elseif($order->order_status == 2)
                                                        <span class="badge badge-danger">Rejected</span>
                                                    @elseif($order->order_status == 3)
                                                        <span class="badge badge-danger">Canceled</span>
                                                    @else
                                                        <span class="badge badge-primary">Not Set</span>
                                                    @endif
                                                </td>
                                                <td>$760.50</td>
                                                <td><a data-toggle="tooltip" data-placement="top" title="" href="#" data-original-title="View Detail" class="btn btn-info btn-sm"><i class="mdi mdi-eye"></i></a></td>
                                            </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding bg-white border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="feature-box">
                        <i class="mdi mdi-truck-fast"></i>
                        <h6>Free & Next Day Delivery</h6>
                        <p>Lorem ipsum dolor sit amet, cons...</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="feature-box">
                        <i class="mdi mdi-basket"></i>
                        <h6>100% Satisfaction Guarantee</h6>
                        <p>Rorem Ipsum Dolor sit amet, cons...</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="feature-box">
                        <i class="mdi mdi-tag-heart"></i>
                        <h6>Great Daily Deals Discount</h6>
                        <p>Sorem Ipsum Dolor sit amet, Cons...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
