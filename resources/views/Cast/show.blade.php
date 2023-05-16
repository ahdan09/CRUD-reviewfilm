@extends('master')

@section('title')
        Cast 
@endsection

@section('sub-title')
        Cast Table
@endsection

@section('content')

<a href="cast/create" class="btn btn-info btn-sm">tambah</a>


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">age</th>
        <th scope="col">bio</th>
        <th scope="col">Detail</th>
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
                <a href="/cast/ {{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                <a href="/cast/ {{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                @csrf
                @method('delete')
                <input type="submit" value="delete" class="btn btn-danger btn-sm">
                </form>
            </td>
        </tr>
        @empty
            <h1>Data Kosong</h1>
        @endforelse
     
    </tbody>
  </table>
@endsection