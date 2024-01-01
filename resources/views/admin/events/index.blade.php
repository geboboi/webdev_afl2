@extends('admin.layouts.template')

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-3">Events</h4>
                    <div class="col-sm-4">
                        <a href="{{ route ('admin.event.create')}}">
                            <button type="button" class="btn btn-primary waves-effect waves-light mb-3"><i class="fas fa-plus px-1"></i>
                                Add Event
                            </button>
                        </a>
                    </div>
                    <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Banner</th>
                                <th>Event Name</th>
                                <th>Description</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <td> <img src="{{ asset('storage/' . $event->banner) }}" class="img-fluid img1"
                                            alt="Image not available" width="150px"></td>
                                    <td>{{ $event->event_name }}</td>
                                    <td class="text-wrap">{{ $event->description }}</td>
                                    <td>{{ $event->start_date }}</td>
                                    <td>{{ $event->end_date }}</td>
                                    <td>
                                        <div class="button-list">
                                            <a href ="{{ route('admin.event.edit', $event->id) }}"><button
                                                    type="button" class="btn btn-success waves-effect waves-light"
                                                    name="edit" id="edit"><i class="fas fa-edit"></i></button></a>
                                            <button type="button" class="btn btn-info waves-effect waves-light"><i
                                                    class="fas fa-file-alt"></i></button>
                                            <form action="{{ route('admin.event.destroy', $event->id) }}" method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus Event {{ $event->event_name }}?');">
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
