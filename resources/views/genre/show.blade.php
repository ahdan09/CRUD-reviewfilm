@extends('master')

@section('title')
    Genre
@endsection

@section('sub-title')
    Genre Table
@endsection

@push('scripts')
    <script src="https://kit.fontawesome.com/c0c6839ed1.js" crossorigin="anonymous"></script>
@endpush

@section('content')

    <a href="{{ route('genres.create') }}" class="btn btn-info btn-sm">Tambah</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($genres as $key => $genre)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $genre->name }}</td>
                <td>
                    <form action="{{ route('genres.destroy', $genre->id) }}" method="POST">
                        <a href="{{ route('genres.edit', $genre->id) }}" class="btn btn-warning btn-sm">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus film ini?')"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Data Kosong</td>
            </tr>
        @endforelse
        
        </tbody>
    </table>
@endsection
