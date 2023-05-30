@extends('master')

@push('scripts')
    <script src="https://kit.fontawesome.com/c0c6839ed1.js" crossorigin="anonymous"></script>
@endpush

@section('content')
    <div class="container">
        <h1>Detail Film</h1>

        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('poster/' . $film->poster) }}" alt="Poster" width="100">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $film->title }}</h5>
                        <p class="card-text">Sinopsis: {{ $film->synopsis }}</p>
                        <p class="card-text">Tahun: {{ $film->year }}</p>
                        <p class="card-text">Genre: {{ $film->genre ? $film->genre->name : 'Data genre tidak tersedia' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <a href="{{ route('films.edit', $film->id) }}" class="btn btn-primary">Edit Film</a>
    </div>
@endsection
