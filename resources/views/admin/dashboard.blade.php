@extends('admin.layouts.template')

@section('page_content')
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-end">
                        </div>

                        <h4 class="header-title mt-0 mb-4">Total Sales</h4>

                        <div class="widget-chart-1">

                            <div class="widget-detail-1 text-end">
                                <h2 class="fw-normal pt-2 mb-1"> {{$orderCount}} </h2>
                                <p class="text-muted mb-1">Sales today</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->

</div> <!-- content -->
@endsection
