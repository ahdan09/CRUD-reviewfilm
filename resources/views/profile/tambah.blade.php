@extends('master')

@section('content')
    <div class="container">
        <h1>Create Profile</h1>

        <form action="{{ route('profile.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="user_id">User:</label>
                <select name="user_id" id="user_id" class="form-control">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" name="age" id="age" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="bio">Bio:</label>
                <textarea name="bio" id="bio" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection