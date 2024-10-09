@extends('backend.layout.master')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Slider</h6>
        </div>
        <div class="card-body">
            <a href="" class="btn btn-primary mb-2">Tambah Slider</a>
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>File</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $slider = [
                            ['id' => 1, 'title' => 'slider Pertama', 'deskripsi' => 'deskripsi pertama','file' => 'path/to/image1.jpg'],
                            ['id' => 2, 'title' => 'slider Kedua', 'deskripsi' => 'deskripsi kedua','file' => 'path/to/image1.jpg'],
                         ];
                     @endphp
                    @foreach ($slider as $item)
                        <tr>
                            <td>{{ $item['id'] }}</td> 
                            <td>{{ $item['title'] }}</td> 
                            <td>{{ $item['deskripsi']}}</td>
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