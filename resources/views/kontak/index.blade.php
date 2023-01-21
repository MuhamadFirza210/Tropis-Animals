@extends('layout.admin')

@section('content')
    <div class="container pt-5">
        <div class="card">
            <div class="card-body">
    <table class="table align-middle">
        <tr>
            <th>Subject</th>
            <th>Nama</th>
            <th>E-mail</th>
            <th>Deskrpsi</th>
            <th>Deskripsi</th>
        </tr>
        @foreach ($data1 as $data)

        <tr>
            <td>{{ $data->subject }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->excerpt }}</td>
            <td><form action="{{ route('kontak2.destroy', $data->id) }}" method="post">
                @csrf
                @method('delete')
                <a href="{{ route('kontak2.show', $data->id) }}"
                    class="btn btn-sm btn-outline-warning">
                    Show
                </a> |
                <button type="submit" class="btn btn-sm btn-outline-danger"
                    onclick="return confirm('Apakah Anda Yakin?')">Delete
                </button>
            </form></td>
        </tr>

        @endforeach
    </table>
            </div>
        </div>
    </div>
@endsection

