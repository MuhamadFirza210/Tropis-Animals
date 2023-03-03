@extends('layout.admin')
@section('content')
<div class="container pt-5">
    <div class="card">
        <div class="card-header">
            <h1>Admin</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('kategori.update', $data->id) }}" method="POST">
                @csrf
                @method('put')
                <label for="">Kategori</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"value="{{ $data->nama }}">
                @error('nama')
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
