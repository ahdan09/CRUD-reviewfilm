@extends('master')


@push('scripts')
    <script src="https://kit.fontawesome.com/c0c6839ed1.js" crossorigin="anonymous"></script>
@endpush

@section('content')
    <h1>Reviews</h1>
    
    <a href="{{ route('reviews.create') }}" class="btn btn-primary mb-3">Create Review</a>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Film</th>
                <th>Rating</th>
                <th>Comment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)
                <tr>
                    <td>{{ $review->id }}</td>
                    <td>{{ $review->user->name }}</td>
                    <td>{{ $review->film->title }}</td>
                    <td>{{ $review->rating }}</td>
                    <td>{{ $review->comment }}</td>
                    <td>
                        <a href="{{ route('reviews.show', $review->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this review?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection