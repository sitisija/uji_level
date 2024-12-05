@extends('layouts.master')

@section('content')
<h1 class="mb-3">Data Kategori</h1>
    <div class="card-body">
        <a href="{{route('kategori.tambah')}}" class="btn btn-primary mb-2">Tambah</a>
        <div class="table-responsive">
            <table class="table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td class="d-flex">
                            <form action="{{route('kategori.aksi_hapus',$item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger me-2">Hapus</button>
                            </form>
                            <a href="{{route('kategori.edit',$item->id)}}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
