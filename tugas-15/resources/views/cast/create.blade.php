@extends('layouts.master')
@section('judul')
    Halaman untuk menambah pemain film baru
@endsection

@section('content')
<form action="/cast" method="POST">
    @csrf
    <div class="mb-3">
      <label>Name</label>
      <input type="text" name="name" class="form-control">
    </div>
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror 
    <div class="mb-3">
      <label>Age</label>
      <input type="text" name="age" class="form-control">
    </div>
    @error('age')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror 
    <div class="mb-3">
      <label>bio</label>
      <textarea name="bio" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror 
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection