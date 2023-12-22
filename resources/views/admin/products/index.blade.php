@extends('admin.layouts.template')

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-3">Products</h4>
                        <div class="col-sm-4">
                            <a href="{{ route('admin.product.create') }}"><button type="button"
                                    class="btn btn-primary waves-effect waves-light mb-3"><i class="fas fa-plus px-1"></i>
                                    Add Product</button></a>
                        </div>
                        <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Promo Percentage</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td> <img src="{{ asset($product->image) }}" class="img-fluid img1" alt="Image not available"
                                                width="150px"></td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->percentage }}</td>
                                        <td>
                                            <div class="button-list">
                                                <a href ="{{ route('admin.product.edit', $product->id) }}"><button
                                                        type="button" class="btn btn-success waves-effect waves-light"
                                                        name="edit" id="edit"><i
                                                            class="fas fa-edit"></i></button></a>
                                                            <button type="button" class="btn btn-info waves-effect waves-light"><i
                                                                class="fas fa-file-alt"></i></button>
                                                                <form action="{{ route('admin.product.destroy', $product->id) }}"
                                                                    method="POST"
                                                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus {{ $product->name }}?');">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-danger waves-effect waves-light"><i
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
