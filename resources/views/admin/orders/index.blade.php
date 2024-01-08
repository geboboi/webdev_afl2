@extends('admin.layouts.template')

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-3">Orders</h4>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="col-sm-4">
                        <a href="{{ route ('checkout.district')}}">
                            <button type="button" class="btn btn-primary waves-effect waves-light mb-3"><i class="fas fa-plus px-1"></i>
                                Add Order
                            </button>
                        </a>
                    </div>
                    <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Order ID</th>
                                <th>Total Amount</th>
                                <th>Payment Status</th>
                                <th>Payment Method</th>
                                <th>Order Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->user_id }}</td>
                                    <td class="text-wrap">{{ $order->order_id }}</td>
                                    <td>{{ $order->total_amount }}</td>
                                    <td>{{ $order->payment_status }}</td>
                                    <td>{{ $order->payment_method }}</td>
                                    <td>{{ $order->status }}</td>
                                    <td>
                                        <div class="button-list">
                                            <a href ="{{ route('admin.order.edit', $order->id) }}"><button
                                                    type="button" class="btn btn-success waves-effect waves-light"
                                                    name="edit" id="edit"><i class="fas fa-edit"></i></button></a>
                                            <form action="{{ route('admin.order.destroy', $order->id) }}" method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus Order {{ $order->order_id }}?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger waves-effect waves-light"><i
                                                        class="fas fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div> <!-- end row -
@endsection
