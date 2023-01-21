@extends('layout.admin')

@section('content')
    <div class="container pt-5">
        <div class="card">
            <div class="card-header">
                <h1>Admin</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('berita.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3" >
                        <label for="formFile" class="form-label">POST IMAGE</label>`1
                        <input class="form-control @error('image') is-invalid @enderror" name="image" type="file" id="formFile"value="{{ $data->image }}">
                      </div>
                      @error('image')
                      <span class=" invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    <label for="">title</label>
                    <input type="text" name = "title" class="form-control  @error('title') is-invalid @enderror" value="{{ $data->title }}">
                    @error('title')
                        <span class=" invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="">body</label>
                    <input type="text" name = "body" class="form-control @error('body') is-invalid @enderror"value="{{ $data->body }}">
                    @error('body')
                        <span class=" invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <br>
                    <button type="submit" class="btn btn-primary">Simpan</button>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@endsection
