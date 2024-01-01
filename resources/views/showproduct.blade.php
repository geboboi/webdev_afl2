@extends('layouts.template')

@section('main_content')

<div class="mt-4 p-5 bg-primary text-white rounded">
    <h2>{{$showproduct['name']}}</h2>
    <p>description: {{$showproduct['description']}}</p>
</div>
@endsection
