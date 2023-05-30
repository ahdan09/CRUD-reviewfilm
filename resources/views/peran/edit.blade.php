@extends('master')

@push('scripts')
<script src="https://kit.fontawesome.com/c0c6839ed1.js" crossorigin="anonymous"></script>
@endpush

@section('content')
    <h1>Edit Peran</h1>

    <form action="{{ route('perans.update', $peran->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="film_id">Film</label>
            <select name="film_id" id="film_id" class="form-control">
                @foreach ($films as $film)
                    <option value="{{ $film->id }}" {{ $film->id == $peran->film_id ? 'selected' : '' }}>{{ $film->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="cast_id">Cast</label>
            <select name="cast_id" id="cast_id" class="form-control">
                @foreach ($casts as $cast)
                    <option value="{{ $cast->id }}" {{ $cast->id == $peran->cast_id ? 'selected' : '' }}>{{ $cast->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection