@extends('layouts.master')

@section('judul')
    Detail Pemain Film
@endsection

@section('content')
    
<h1>{{ $users->name }}</h1>
<p>{{ $users->age }}</p>
<p>{{ $users->bio }}</p>

<a href="/cast" class="btn btn-secondary btn-sm">Kembali</a>

@endsection
