@extends('templates/main')



@include('nav/nav')
@section('container')
<div class="container mt-5">
    <h1 class="mb-3 text-center">Halaman All Post</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">judul</th>
        <th scope="col">deskripsi</th>
        <th scope="col">author</th>
        <th scope="col">aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach($post as $pos)
      <tr>
        <th scope="row">{{ $pos->id }}</th>
        <td>{{ $pos->judul }}</td>
        <td>{{ $pos->deskripsi }}</td>
        <td>{{ $pos->user_name }}</td>
        <td><form action="/destroy/{{ $pos->id }}" method="post" class="d-inline">
            @csrf
         <button class="btn btn-danger border-0" type="submit" onclick="return confirm('are u sure abaout this?')">Hapus</button>
        </form>
    </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


