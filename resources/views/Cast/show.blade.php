@extends('master')

@section('title')
        Cast 
@endsection

@section('sub-title')
        Cast Table
@endsection

@push('scripts')
<script src="https://kit.fontawesome.com/c0c6839ed1.js" crossorigin="anonymous"></script>
@endpush

@section('content')

<a href="cast/create" class="btn btn-info btn-sm">tambah</a>


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">age</th>
        <th scope="col">bio</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($peran as $key => $item)
        <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->age }}</td>
            <td>{{ $item->bio }}</td>
            <td>
                <form action="/cast/{{ $item->id }}" method="POST">
                <a href="/cast/ {{ $item->id }}" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a>
                <a href="/cast/ {{ $item->id }}/edit" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen"></i></a>
                @csrf
                @method('delete')
                <button type="submit" value="delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus film ini?')"><i class="fa-solid fa-trash"></i></button>                
              </form>
            </td>
        </tr>
        @empty
            <h1>Data Kosong</h1>
        @endforelse
     
    </tbody>
  </table>
@endsection