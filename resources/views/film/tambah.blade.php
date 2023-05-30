@extends('master')

@push('scripts')
<script src="https://kit.fontawesome.com/c0c6839ed1.js" crossorigin="anonymous"></script>
@endpush

@section('content')
    <div class="container">
        <h1>Tambah Film</h1>

        <form action="{{ route('films.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="synopsis">Sinopsis</label>
                <textarea class="form-control" id="synopsis" name="synopsis" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="year">Tahun</label>
                <input type="number" class="form-control" id="year" name="year" required>
            </div>

            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="file" class="form-control" id="poster" name="poster" required>
            </div>

            <div class="form-group">
                <label for="genre">Genre</label>
                <select class="form-control" id="genre" name="genre_id" required>
                    <option value="">Pilih Genre</option>
                    @foreach($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endforeach
                    </select>
                </div>
    
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    @endsection