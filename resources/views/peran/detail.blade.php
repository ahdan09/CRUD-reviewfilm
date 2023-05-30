@extends('master')

@push('scripts')
<script src="https://kit.fontawesome.com/c0c6839ed1.js" crossorigin="anonymous"></script>
@endpush

@section('content')
    <h1>Detail Peran</h1>

    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $peran->id }}</td>
            </tr>
            <tr>
                <th>Film</th>
                <td>{{ $peran->film->title }}</td>
            </tr>
            <tr>
                <th>Cast</th>
                <td>{{ $peran->cast->name }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('perans.index') }}" class="btn btn-secondary">Kembali</a>
@endsection