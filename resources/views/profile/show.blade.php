@extends('master')

@push('scripts')
    <script src="https://kit.fontawesome.com/c0c6839ed1.js" crossorigin="anonymous"></script>
@endpush

@section('content')
    <div class="container">
        <h1>Profiles</h1>

        <a href="{{ route('profile.create') }}" class="btn btn-primary mb-3">Create Profile</a>

        <table class="table">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Age</th>
                    <th>Bio</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($profiles as $profile)
                    <tr>
                        <td>{{ $profile->user->name }}</td>
                        <td>{{ $profile->age }}</td>
                        <td>{{ $profile->bio }}</td>
                        <td>{{ $profile->address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
