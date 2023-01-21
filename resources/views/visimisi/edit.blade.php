@extends('layout.admin')

@section('content')
    <div class="container pt-5">
        <div class="card">
            <div class="card-header">
                <h1>Admin</h1>
            </div>
            <div class="card-visi">
                <form action="{{ route('visimisi.update', $data->id) }}" method="POST">
                    @csrf
                    @method('put')

                    <label for="">visi</label>
                    <input type="text" name = "visi" class="form-control  @error('visi') is-invalid @enderror" value="{{ $data->visi }}">
                    @error('visi')
                        <span class=" invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="">visi body</label>
                    <input type="text" name = "visibody" class="form-control @error('visibody') is-invalid @enderror"value="{{ $data->visibody }}">
                    @error('visibody')
                        <span class=" invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    @csrf
                    <label for="">misi</label>
                    <input type="text" name = "misi" class="form-control @error('misi') is-invalid @enderror"value="{{ $data->misi }}">
                    @error('misi')
                        <span class=" invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="">misi body</label>
                    <input type="text" name = "misibody" class="form-control @error('misibody') is-invalid @enderror"value="{{ $data->misibody }}">
                    @error('misibody')
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
