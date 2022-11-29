@extends('templates/main')



@include('nav/nav')
@section('container')
<div class="container">
<a class="text-decoration-none my-5 btn btn-primary " href="/create">Tambah Data</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Deskripsi</th>
        <th class="text-center" scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach($post as $pos)
      <tr>
        <th scope="row">{{ $pos->id }}</th>
        <td>{{ $pos->judul }}</td>
        <td>{{ $pos->deskripsi }}</td>
        <td class="text-center">
            <a class="text-decoration-none  btn btn-success " href="/edit/{{ $pos->id }}">edit</a>
            <form action="/delete/{{ $pos->id }}" method="post" class="d-inline">
                @csrf
             <button class="btn btn-danger border-0" type="submit" onclick="return confirm('are u sure abaout this?')">Hapus</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


