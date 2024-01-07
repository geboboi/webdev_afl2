@extends('admin.layouts.template')

@section('page_content')
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Add Product</h4>
                        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="simpleUnpit" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="example-number" class="form-label">Price</label>
                                    <input class="form-control" id="price" type="number" name="price" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="example-textarea" class="form-label">Description</label>
                                <textarea class="form-control" id="desc" name="desc" rows="5" required></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="example-fileinput" class="form-label mb-3">Product Image</label>
                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                    <input type="file" id="product_image" name="product_image" class="form-control"
                                        accept="image/jpg, image/png, image/jpeg" onchange="previewImage()">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="inputState" class="form-label">Promo Percentage</label>
                                    <select id="promo" name="promo" class="form-select">
                                        <option></option>
                                        @foreach ($promos as $promo)
                                            <option value ="{{ $promo->id }}">{{ $promo->percentage . "% - " . $promo->event->event_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#product_image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function (oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
