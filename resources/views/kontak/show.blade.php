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
                    <label for="">Subject</label>
                    <input type="text" name = "title" class="form-control " value="{{ $data1->subject }}" disabled>

                    <label for="">nama</label>
                    <input type="text" name = "nama" class="form-control " value="{{ $data1->nama }}" disabled>


                    <label for="">email</label>
                    <input type="text" name = "email" class="form-control " value="{{ $data1->email }}" disabled>

                    <label for="">deskripsi</label>
                    <input type="text" name = "deskripsi" class="form-control " value="{{ $data1->deskripsi }}" disabled>


                    <br>
                </form>
                <a href="/kontak2" class="btn btn-success btn-sm">Kembali   </a>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 @endsection
