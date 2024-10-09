@extends('backend.layout.master')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Layanan</h6>
        </div>
        <div class="card-body">
            <a href="" class="btn btn-primary mb-2">Tambah Layanan</a>
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $layanan = [
                             ['id' => 1, 'title' => 'layanan Pertama', 'deskripsi' => 'deskripsi pertama'],
                             ['id' => 2, 'title' => 'layanan Kedua', 'deskripsi' => 'deskripsi kedua'],
                         ];
                     @endphp
                   @foreach ($layanan as $item)
                   <tr>
                     <td>{{ $item['id'] }}</td> 
                     <td>{{ $item['title'] }}</td> 
                     <td><img src="" width="200" alt="images"></td> 
                     <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <form action="" method="post" style="display:inline;"> 
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button> 
                        </form>
                        </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection