@extends('admin.layouts.template')

@section('page_content')
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Update Order</h4>
                        <form action="{{ route('admin.order.update', $orders->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="simpleUnpit" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname"
                                        value="{{ $orders->first_name }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="example-number" class="form-label">Last Name</label>
                                    <input class="form-control" id="lname" type="text" name="lname"
                                        value="{{ $orders->last_name }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <label for="example-textarea" class="form-label">Address</label>
                                    <textarea class="form-control" id="address" name="address" rows="10">{{ $orders->address }}</textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="example-number" class="form-label">Postcode</label>
                                    <input class="form-control" id="postcode" type="number" name="postcode"
                                        value="{{ $orders->post_code }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">

                                    <label for="simpleUnpit">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="name@example.com"
                                        value="{{ $orders->email }}" name="email">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="example-number" class="form-label">Phone</label>
                                    <input class="form-control" id="phone" type="number" name="phone"
                                        value="{{ $orders->phone }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <label for="example-textarea" class="form-label">Order notes</label>
                                    <textarea class="form-control" id="address" name="notes" rows="10">{{ $orders->order_notes }}</textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="example-number" class="form-label">Total Amount</label>
                                    <input class="form-control" id="postcode" type="number" name="total_amount"
                                        value="{{ $orders->total_amount }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="inputState" class="form-label">Payment Status</label>
                                    <select id="inputState" name="payment_status" class="form-select">
                                        <option>Choose</option>
                                        <option value="Paid">Paid</option>
                                        <option value="Unpaid">Unpaid</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="simpleUnpit" class="form-label">Payment Method</label>
                                    <input type="text" class="form-control" id="payment_method" name="payment_method"
                                        value="{{ $orders->payment_method }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputState" class="form-label">Order Status</label>
                                <select id="inputState" name="status" class="form-select">
                                    <option value ="New">New</option>
                                    <option value ="Processing">Processing</option>
                                    <option value ="On Delivery">On Delivery</option>
                                    <option value ="Delivered">Delivered</option>
                                    <option value ="Cancelled">Cancelled</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
