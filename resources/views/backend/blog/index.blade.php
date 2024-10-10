@extends('backend.layout.master')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Blog</h6>
        </div>
        <div class="card-body">
            <a href="" class="btn btn-primary mb-2">Tambah Blog</a>
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Judul</th>
                            <th>File</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                      @foreach ($blogs as $item)
                      <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->title}}</td>
                          <td><img src="{{asset($item->file)}}" width="200" alt="images"></td>
                          <td><a href="" class="btn btn-warning">edit</a>
                            <form action="" method="post">
                                @csrf
                                <button class="btn btn-danger">Hapus</button>
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