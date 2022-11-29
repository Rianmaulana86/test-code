<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../templates/assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../templates/css/styles.css" rel="stylesheet" />
</head>

<form action="/editPost/{{ $post->id }}" method="post">
    @csrf 
    <div class="container mt-5">
        <h1 class="text-center">Halmaan Edit Post</h1>
    <div class="my-3">
      <label for="exampleInputjudul1" class="form-label">judul</label>
      <input name="judul" type="text" class="form-control" id="exampleInputjudul1" aria-describedby="judulHelp" value="{{ $post->judul }}">
    </div>
    <div class="mb-3">
      <label for="exampleInputdeskripsi" class="form-label">deskripsi</label>
      <input name="deskripsi" type="deskripsi" class="form-control" id="exampleInputdeskripsi" value="{{ $post->deskripsi }}"> 
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    
  </form>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="../templates/js/scripts.js"></script>