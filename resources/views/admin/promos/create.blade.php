@extends('admin.layouts.template')

@section('page_content')
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Add Promo</h4>
                        <form action="{{ route('admin.promo.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="simpleUnpit" class="form-label">Promo Percentage</label>
                                    <input type="number" class="form-control" id="percentage" name="percentage" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="inputState" class="form-label">Event</label>
                                <select id="event" name="event" class="form-select">
                                    <option></option>
                                    @foreach ($events as $event)
                                        <option value ="{{ $event->id }}">{{ $event->event_name }}</option>
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
@endsection
