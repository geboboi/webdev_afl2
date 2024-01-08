@extends('admin.layouts.template')

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-3">Shops</h4>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="col-sm-4">
                        <a href="{{ route ('admin.shop.create')}}">
                            <button type="button" class="btn btn-primary waves-effect waves-light mb-3"><i class="fas fa-plus px-1"></i>
                                Add Shop
                            </button>
                        </a>
                    </div>
                    <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th class="text-wrap">Map</th>
                                <th>Operational Time</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($shops as $shop)
                                <tr>

                                    <td >{{ $shop->name }}</td>
                                    <td class="text-wrap text-break">{{ $shop->map }}</td>
                                    <td>{{ $shop->operational_time }}</td>
                                    <td >{{ $shop->address }}</td>
                                    <td>
                                        <div class="button-list">
                                            <a href ="{{ route('admin.shop.edit', $shop->id) }}"><button
                                                    type="button" class="btn btn-success waves-effect waves-light"
                                                    name="edit" id="edit"><i class="fas fa-edit"></i></button></a>
                                            <button type="button" class="btn btn-info waves-effect waves-light"><i
                                                    class="fas fa-file-alt"></i></button>
                                            <form action="{{ route('admin.shop.destroy', $shop->id) }}" method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus Shop {{ $shop->name }}?');">
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
