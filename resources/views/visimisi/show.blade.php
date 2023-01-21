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
                    <label for="">visi</label>
                    <input type="text" name = "visi" class="form-control " value="{{ $data->visi }}" disabled>

                    <label for="">visi body</label>
                    <input type="text" name = "visibody" class="form-control " value="{{ $data->visibody }}" disabled>


                    <label for="">misi</label>
                    <input type="text" name = "misi" class="form-control " value="{{ $data->misi }}" disabled>

                    <label for="">misi body</label>
                    <input type="text" name = "misibody" class="form-control " value="{{ $data->misibody }}" disabled>


                    <br>
                    <button class="btn btn-primary btn-sm"><a href="/tetangkami"></a></button>

                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 @endsection
