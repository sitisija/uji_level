@extends('layouts.master')
@section('content')
<h1 class="mb-3">Data Produk</h1>
    <div class="card-body">
        <a href="{{route('data.produk.tambah')}}" class="btn btn-primary mb-2">Tambah</a>
        <div class="table-responsive">
            <table class="table" id="dataTable" width="100%" cellspacing="0"> 
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Diskon</th>
                        <th>File</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @foreach ($products as $item)
                      <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->title}}</td>
                          <td>{{$item->description}}</td>
                          <td>{{$item->price}}</td>
                          <td>{{$item->discount}}</td>
                          <td><img src="{{asset($item->file)}}" width="200" alt="images"></td>
                          <td>
                        <div class="d-flex ">
                            <form action="{{route('data.produk.aksi_hapus',$item->id)}}" method="post">
                                @csrf
                                <button class="btn btn-danger me-2">Hapus</button>
                            </form>
                            <a href="{{route('data.produk.edit',$item->id)}}" class="btn btn-warning">edit</a>
                        </div>
                        </td>
                        </tr>
                    </tbody>
                    @endforeach
            </table>
        </div>
    </div>
</div>
@endsection