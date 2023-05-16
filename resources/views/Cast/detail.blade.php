@extends('master')

@section('title')
        Detail cast
@endsection

@section('sub-title')
        Cast Table
@endsection

@section('content')
    <h3>{{ $cast->name }}</h3>
    <h6>{{ $cast->age }}</h6>
    <h4>{{ $cast->bio }}</h4>
@endsection