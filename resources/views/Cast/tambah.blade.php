@extends('master')

@section('title')
        Create Cast
@endsection

@section('sub-title')
        Cast Table
@endsection

@section('content')
<form action="/cast" method="POST">
    @csrf 
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" >
    <label for="exampleFormControlInput1" class="form-label">age</label>
    <input type="number" name="age" class="form-control" id="exampleFormControlInput1" >
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Bio</label>
    <textarea class="form-control" name="bio" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">submit</button>
  </div>
</form>
@endsection