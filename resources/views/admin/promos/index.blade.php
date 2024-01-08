@extends('admin.layouts.template')

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-3">Promos</h4>
                    <div class="col-sm-4">
                        <a href="{{ route ('admin.promo.create')}}">
                            <button type="button" class="btn btn-primary waves-effect waves-light mb-3"><i class="fas fa-plus px-1"></i>
                                Add Promo
                            </button>
                        </a>
                    </div>
                    <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Percentage</th>
                                <th>Event Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($promos as $promo)
                                <tr>
                                    <td>{{ $promo->id }}</td>
                                    <td>{{ $promo->percentage }}%</td>
                                    <td>{{ optional($promo->event)->event_name ?? 'N/A' }}</td>
                                    <td>
                                        <div class="button-list">
                                            <a href ="{{ route('admin.promo.edit', $promo->id) }}"><button
                                                    type="button" class="btn btn-success waves-effect waves-light"
                                                    name="edit" id="edit"><i class="fas fa-edit"></i></button></a>
                                            <form action="{{ route('admin.promo.destroy', $promo->id) }}" method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus Promo {{ $promo->percentage }}%?');">
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
