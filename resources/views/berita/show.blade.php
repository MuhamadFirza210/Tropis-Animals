@extends('layout.admin')

@section('content')
    <div class="container pt-5">
        <div class="card">
            <div class="card-header">
                <h1>Admin</h1>
            </div>
            <div class="card-body">

                    <label for="">image</label><br>
                    <img src="{{ asset('storage/'.$data->image) }}" alt="" style="width: 250px; height: auto;" ><br>
                    <label for="">title</label>
                    <input type="text" name = "title" class="form-control " value="{{ $data->title }}" disabled>
                    <label for="">kategori</label>
                    <input type="text" name = "title" class="form-control " value="{{ $data->kategori->nama }}" disabled>
                    <label for="">body</label>
                    <input type="text" name = "body" class="form-control " value="{{ $data->body }}" disabled>





                    <br>
                    <a href="/berita"><button class="btn btn-primary btn-sm">Back</button></a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 @endsection
