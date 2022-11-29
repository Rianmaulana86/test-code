@extends('templates/main')



@section("container")

<form action="/addPost" method="post">
    @csrf 
    <div class="container mt-5">
        <h1 class="text-center">Halmaan Tambah Post</h1>
    <div class="my-3">
      <label for="exampleInputjudul1" class="form-label">judul</label>
      <input name="judul" type="text" class="form-control" id="exampleInputjudul1" aria-describedby="judulHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputdeskripsi" class="form-label">deskripsi</label>
      <input name="deskripsi" type="deskripsi" class="form-control" id="exampleInputdeskripsi">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    
  </form>