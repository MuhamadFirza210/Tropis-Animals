@extends('layout.admin')

@section('content')
    <div class="container pt-5">
        <div class="card">
            <div class="card-header">
                <h1>Admin</h1>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <label for="">title</label>
                    <input type="text" name = "title" class="form-control " value="{{ $data->title }}" disabled>

                    <label for="">body</label>
                    <input type="text" name = "body" class="form-control " value="{{ $data->body }}" disabled>


                    <label for="">subtitle</label>
                    <input type="text" name = "subtitle" class="form-control " value="{{ $data->subtitle }}" disabled>


                    <br>
                    <button class="btn btn-primary btn-sm"><a href="/tetangkami"></a></button>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 @endsection
