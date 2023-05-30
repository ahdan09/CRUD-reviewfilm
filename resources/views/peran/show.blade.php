@extends('master')

@push('scripts')
<script src="https://kit.fontawesome.com/c0c6839ed1.js" crossorigin="anonymous"></script>
@endpush

@section('content')
    <h1>Daftar Peran</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Film</th>
                <th>Cast</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perans as $peran)
                <tr>
                    <td>{{ $peran->id }}</td>
                    <td>{{ $peran->film->title }}</td>
                    <td>{{ $peran->cast->name }}</td>
                    <td>
                        <a href="{{ route('perans.show', $peran->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('perans.edit', $peran->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('perans.destroy', $peran->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus peran ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('perans.create') }}" class="btn btn-success">Tambah Peran Baru</a>
@endsection