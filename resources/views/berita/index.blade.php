@extends('layout.admin')

@section('content')
        <div class="container-5">
            <div class="card">
                <div class="card-header">
                    <span class="h1">Admin</span>
                    <button class="btn btn-primary btn-sm" style="float: right;"><a href="{{ route('berita.create') }}" class="text-white text-decuration-none">Tambah Data</a></button>
                </div>
            </div>
        </div>

        <div class="card-body">
    <table class="table align-middle">
        <tr>
            <th>IMAGE</th>
            <th>KATEGORI</th>
            <th>TITLE</th>
            <th>BODY</th>
            <th width="25%">ACTION</th>
        </tr>
        @foreach ($datas as $data)

        <tr>
            <td><img src="{{ asset('storage/'.$data->image) }}" alt="" style="width: 250px; height: auto;" ></td>
            <td>{{ $data->kategori->nama }}</td>
            <td>{{ $data->title }}</td>
            <td>{{ $data->bodysingkat }}</td>
            <td><form action="{{ route('berita.destroy', $data->id) }}" method="post">
                @csrf
                @method('delete')
                <a href="{{ route('berita.edit', $data->id) }}"
                    class="btn btn-sm btn-outline-success">
                    <i class="fa-solid fa-pen-to-square"></i>
                    Edit
                </a> |
                <a href="{{ route('berita.show', $data->id) }}"
                    class="btn btn-sm btn-outline-warning">
                    <i class="fa-solid fa-eye"></i>
                    Show
                </a> |
                <button type="submit" class="btn btn-sm btn-outline-danger"
                    onclick="return confirm('Apakah Anda Yakin?')">
                    <i class="fa-solid fa-trash"></i>Delete
                </button>
            </form></td>
        </tr>

        @endforeach
    </table>
            </div>
        </div>
    </div>
@endsection
