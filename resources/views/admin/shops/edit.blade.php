@extends('admin.layouts.template')

@section('page_content')
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Update Shop</h4>
                        <form action="{{ route('admin.shop.update', $shops->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="simpleUnpit" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$shops->name}}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="simpleUnpit" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{$shops->address}}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="example-fileinput" class="form-label mb-3">Operational Time</label>
                                    <input type="text" id="operational_time" name="operational_time" value="{{$shops->operational_time}}" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="example-fileinput" class="form-label mb-3">Map (embed link)</label>
                                    <input type="text" id="map" name="map" value="{{$shops->map}}" class="form-control" required>
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
