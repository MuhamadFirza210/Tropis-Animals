@extends('layout.admin')

@section('content')
    <div class="container pt-5">
        <div class="card">
            <div class="card-header">
                <span class="h1">Admin</span>
                <button class="btn btn-primary btn-sm" style="float: right;"> <a href="{{ route('tentangkami.create') }}" class="text-white text-decoration-none" >Tambah Data</a> </button>
            </div>
            <div class="card-body">
    <table class="table align-middle">
        <tr>
            <th>title</th>
            <th>body</th>
            <th>subtitle</th>
            <th width="25%">action</th>
        </tr>
        @foreach ($data as $data)

        <tr>
            <td>{{ $data->title }}</td>
            <td>{{ $data->bodysingkat }}</td>
            <td>{{ $data->subtitle }}</td>
            <td><form action="{{ route('tentangkami.destroy', $data->id) }}" method="post">
                @csrf
                @method('delete')
                <a href="{{ route('tentangkami.edit', $data->id) }}"
                    class="btn btn-sm btn-outline-success">
                    <i class="fa-solid fa-pen-to-square"></i>
                    Edit
                </a> |
                <a href="{{ route('tentangkami.show', $data->id) }}"
                    class="btn btn-sm btn-outline-warning">
                    <i class="fa-solid fa-eye"></i>
                    Show
                </a> |
                <button type="submit" class="btn btn-sm btn-outline-danger"
                    onclick="return confirm('Apakah Anda Yakin?')"><i class="fa-solid fa-trash"></i>
                    Delete
                </button>
            </form></td>
        </tr>

        @endforeach
    </table>
            </div>
        </div>
    </div>
@endsection

