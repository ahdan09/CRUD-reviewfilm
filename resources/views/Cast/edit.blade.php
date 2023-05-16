@extends('master')

@section('title')
        edit cast
@endsection

@section('sub-title')
        Cast Table
@endsection

@section('content')
<form action="/cast/{{ $cast->id }}" method="POST">
    @csrf 
    @method('put')
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="{{ $cast->name }}" >
    <label for="exampleFormControlInput1" class="form-label">age</label>
    <input type="number" name="age" class="form-control" id="exampleFormControlInput1" value="{{ $cast->age }}" >
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Bio</label>
    <textarea class="form-control" name="bio" id="exampleFormControlTextarea1" rows="3" value="{{ $cast->bio }}"></textarea>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Edit</button>
  </div>
</form>
@endsection