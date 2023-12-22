@extends('admin.layouts.template')

@section('page_content')
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Update Product</h4>
                        <form action="{{route('admin.product.update', $products->id)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="simpleUnpit" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$products->name}}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="example-number" class="form-label">Price</label>
                                    <input class="form-control" id="price" type="number" name="price" value="{{$products->price}}"required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="example-textarea" class="form-label">Description</label>
                                <textarea class="form-control" id="desc" name="desc" rows="5" value="{{$products->description}}"required></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="example-fileinput" class="form-label">Product Image</label>
                                    <input type="file" id="image" name="image" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="inputState" class="form-label">Promo Percentage</label>
                                    <select id="promo" name="promo" class="form-select">
                                        <option></option>
                                        @foreach ($promos as $promo)
                                            <option value ="{{ $promo->id }}">{{ $promo->percentage }}</option>
                                        @endforeach
                                    </select>
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