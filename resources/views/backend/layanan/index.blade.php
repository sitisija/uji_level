@extends('backend.layout.master')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Layanan</h6>
    </div>
    <div class="card-body">
        <a href="tambah_blog.html" class="btn btn-primary mb-2">Tambah Layanan</a>
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
                    <tr>
                        <td>1</td>
                        <td>Judul Layanan 1</td>
                        <td>Deskripsi Layanan 1</td>
                        <td>
                            <a href="edit_layanan.html?id=1" class="btn btn-warning">Edit</a>
                            <form action="delete_layanan.php?id=1" method="post" style="display:inline;">
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Judul Layanan 2</td>
                        <td>Deskripsi Layanan 2</td>
                        <td>
                            <a href="edit_layanan.html?id=1" class="btn btn-warning">Edit</a>
                            <form action="delete_layanan.php?id=1" method="post" style="display:inline;">
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Judul Layanan3</td>
                        <td>Deskripsi Layanan 3</td>
                        <td>
                            <a href="edit_layanan.html?id=1" class="btn btn-warning">Edit</a>
                            <form action="delete_layanan.php?id=1" method="post" style="display:inline;">
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Judul Layanan 4</td>
                        <td>Deskripsi Layanan 4</td>
                        <td>
                            <a href="edit_layanan.html?id=1" class="btn btn-warning">Edit</a>
                            <form action="delete_layanan.php?id=1" method="post" style="display:inline;">
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Judul Layanan 5</td>
                        <td>Deskripsi Layanan 5</td>
                        <td>
                            <a href="edit_layanan.html?id=1" class="btn btn-warning">Edit</a>
                            <form action="delete_layanan.php?id=1" method="post" style="display:inline;">
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Judul Layanan 6</td>
                        <td>Deskripsi Layanan 6</td>
                        <td>
                            <a href="edit_layanan.html?id=1" class="btn btn-warning">Edit</a>
                            <form action="delete_layanan.php?id=1" method="post" style="display:inline;">
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Judul Layanan 7</td>
                        <td>Deskripsi Layanan 7</td>
                        <td>
                            <a href="edit_layanan.html?id=1" class="btn btn-warning">Edit</a>
                            <form action="delete_layanan.php?id=1" method="post" style="display:inline;">
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Judul Layanan 8</td>
                        <td>Deskripsi Layanan 8</td>
                        <td>
                            <a href="edit_layanan.html?id=1" class="btn btn-warning">Edit</a>
                            <form action="delete_layanan.php?id=1" method="post" style="display:inline;">
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection