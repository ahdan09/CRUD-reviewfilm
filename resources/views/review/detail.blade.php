@extends('master')


@push('scripts')
    <script src="https://kit.fontawesome.com/c0c6839ed1.js" crossorigin="anonymous"></script>
@endpush

@section('content')
    <h1>Review Details</h1>
    
    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $review->id }}</td>
            </tr>
            <tr>
                <th>User</th>
                <td>{{ $review->user->name }}</td>
            </tr>
            <tr>
                <th>Film</th>
                <td>{{ $review->film->title }}</td>
            </tr>
            <tr>
                <th>Rating</th>
                <td>{{ $review->rating }}</td>
            </tr>
            <tr>
                <th>Comment</th>
                <td>{{ $review->comment }}</td>
            </tr>
        </tbody>
    </table>
    
    <a href="{{ route('reviews.index') }}" class="btn btn-primary">Back</a>
@endsection