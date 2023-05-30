@extends('master')


@push('scripts')
    <script src="https://kit.fontawesome.com/c0c6839ed1.js" crossorigin="anonymous"></script>
@endpush

@section('content')
    <h1>Create Review</h1>
    
    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_id">User:</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="film_id">Film:</label>
            <select name="film_id" id="film_id" class="form-control">
                @foreach ($films as $film)
                    <option value="{{ $film->id }}">{{ $film->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="rating">Rating:</label>
            <input type="number" name="rating" id="rating" class="form-control">
        </div>
        <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea name="comment" id="comment" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection