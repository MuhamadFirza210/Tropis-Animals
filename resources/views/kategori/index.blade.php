@extends('layout.admin')

@section('content')
    <div class="container pt-5">
        <div class="card">
            <div class="card-header">
                <span class="h1">Admin</span>
                <button class="btn btn-primary btn-sm" style="float: right;"> <a href="{{ route('kategori.create') }}" class="text-white text-decoration-none" >Tambah Data</a> </button>
            </div>
            <div class="card-body">
                <table class="table align-middle">
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Action</th>
                    </tr>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->nama }}</td>
                            <td><form action="{{ route('kategori.destroy', $category->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{ route('kategori.edit', $category->id) }}"
                                    class="btn btn-sm btn-outline-success">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    Edit
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
