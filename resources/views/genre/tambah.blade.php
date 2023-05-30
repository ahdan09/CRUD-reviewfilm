@extends('master')

@section('title')
    Genre
@endsection

@section('sub-title')
    Genre list
@endsection

@push('scripts')
    <script src="https://kit.fontawesome.com/c0c6839ed1.js" crossorigin="anonymous"></script>
@endpush

@section('content')
    <form action="/genres" method="POST">
        @csrf
        <div>
            <label for="name">Genre Name:</label>
            <input type="text" name="name">
        </div>
        <button type="submit" class="btn btn-primary mb-3">submit</button>
    </form>
@endsection
