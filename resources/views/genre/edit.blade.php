@extends('master')

@section('title')
      Edit Genre
@endsection

@section('sub-title')
    Genre list
@endsection

@push('scripts')
    <script src="https://kit.fontawesome.com/c0c6839ed1.js" crossorigin="anonymous"></script>
@endpush

@section('content')

    <form action="/genres/{{ $genre->id }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Edit Genre:</label>
            <input type="text" name="name" value="{{ $genre->name }}">
        </div>

        <button type="submit" class="btn btn-primary mb-3">Update</button>
    </form>
@endsection