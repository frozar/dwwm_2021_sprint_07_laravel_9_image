<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Image Upload Example - Tutsmake.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">

    <div class="panel panel-primary">

      <div class="panel-heading">
        <h2>Laravel 9 Image Upload Example - Tutsmake.com</h2>
      </div>

      <div class="panel-body">

      @if(null !== session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif

      <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="mb-3">
              <label class="form-label" for="inputImage">Image:</label>
              <input
                  type="file"
                  name="image"
                  id="inputImage"
                  class="form-control @error('image') is-invalid @enderror">

              @error('image')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
          </div>

          <div class="mb-3">
              <button type="submit" class="btn btn-success">Upload</button>
          </div>

      </form>

      </div>
    </div>
</div>
</body>

</html>
