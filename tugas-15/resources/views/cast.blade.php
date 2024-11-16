@extends('layouts.master')
@section('judul')
    List data untuk para pemain film
@endsection

@section('content')
    <a href="/cast/create" class="btn btn-primary btn-sm" >Tambah</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            {{-- <th scope="col">Age</th> --}}
            {{-- <th scope="col">Bio</th> --}}
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($users as $key => $value)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $value->name }}</td>
                {{-- <td>{{ $value->age }}</td> --}}
                {{-- <td>{{ $value->bio }}</td> --}}
                <td>
                    <a href="/cast/{{ $value->id }}" class="btn btn-info" >Detail</a>
                </td>
            @empty
                <tr>
                    <td>Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection