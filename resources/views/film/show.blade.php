@extends('master')



@push('scripts')
<script src="https://kit.fontawesome.com/c0c6839ed1.js" crossorigin="anonymous"></script>
@endpush

@section('content')
    <div class="container">
        <h1>Film List</h1>

        <a href="{{ route('films.create') }}" class="btn btn-info btn-sm">Tambah</a>

        <hr>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($films && count($films) > 0)            
        <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>poster</th>
                        <th>Judul</th>
                        <th>Sinopsis</th>
                        <th>Tahun</th>
                        <th>Genre</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($films as $key => $film)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td><img src="{{ asset('public/poster/' . $film->poster) }}" alt="Poster" width="100"></td>
                        <td>{{ $film->title }}</td>
                        <td>{{ $film->synopsis }}</td>
                        <td>{{ $film->year }}</td>
                        <td>
                            @if($film->genre)
                                {{ $film->genre->name }}
                            @else
                                Data genre tidak tersedia
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('films.show', $film->id) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('films.edit', $film->id) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen"></i></a>
                            <form action="{{ route('films.destroy', $film->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus film ini?')"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach                
            </tbody>
            </table>
        @else
            <p>Tidak ada film.</p>
        @endif
    </div>
@endsection