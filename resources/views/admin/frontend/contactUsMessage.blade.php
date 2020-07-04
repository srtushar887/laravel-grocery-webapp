@extends('layouts.admin')
@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Contact Us Messages</h4>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title">Order List</h4>
                <div class="table-responsive">

                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $order)
                            <tr>
                                <th scope="row">{{$order->name}}</th>
                                <td>{{$order->phone}}</td>
                                <td>{{$order->email}}</td>
                                <td>{{$order->message}}</td>
                                <td>
                                    @if ($order->status == 0)
                                        <span class="badge badge-success">New</span>
                                    @else
                                        <span class="badge badge-primary">Replied</span>
                                    @endif
                                </td>
                                <td>@if ($order->status == 0)
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#reply{{$order->id}}">Reply Now </button>
                                    @else
                                        <button class="btn btn-primary btn-sm">Already Replied </button>
                                    @endif

                                </td>
                            </tr>

                            <div class="modal fade" id="reply{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Reply Message</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Enter Your Message</label>
                                                <textarea class="form-control" name="message" cols="5" rows="5"></textarea>
                                                <input type="hidden" class="form-control" name="message_id" value="{{$order->id}}">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>


    </div>

@stop
