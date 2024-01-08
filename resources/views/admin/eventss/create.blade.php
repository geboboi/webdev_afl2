@extends('admin.layouts.template')

@section('page_content')
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Add Event</h4>
                        <form action="{{ route('admin.eventss.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="simpleUnpit" class="form-label">Event Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="example-fileinput" class="form-label mb-3">Banner</label>
                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                    <input type="file" id="banner" name="banner" class="form-control"
                                        accept="image/jpg, image/png, image/jpeg" onchange="previewImage()">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="example-textarea" class="form-label">Description</label>
                                <textarea class="form-control" id="desc" name="desc" rows="5" required></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="example-fileinput" class="form-label mb-3">Start Date</label>
                                    <input type="date" id="start_date" name="start_date" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="example-fileinput" class="form-label mb-3">End Date</label>
                                    <input type="date" id="end_date" name="end_date" class="form-control" required>
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

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
