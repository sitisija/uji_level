@extends('backend.layout.master')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Slider</h6>
    </div>
    <div class="card-body">
        <a href="tambah_blog.html" class="btn btn-primary mb-2">Tambah Slider</a>
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
                    <tr>
                        <td>1</td>
                        <td>Judul Slider Pertama</td>
                        <td>Deskripsi 1</td>
                        <td><img src="path/to/image1.jpg" width="200" alt="images"></td>
                        <td>
                            <a href="edit_slider.html?id=1" class="btn btn-warning">Edit</a>
                            <form action="delete_slider.php?id=1" method="post" style="display:inline;">
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Judul Slider Kedua</td>
                        <td>Deskripsi 2</td>
                        <td><img src="path/to/image2.jpg" width="200" alt="images"></td>
                        <td>
                            <a href="edit_slider.html?id=2" class="btn btn-warning">Edit</a>
                            <form action="delete_slider.php?id=2" method="post" style="display:inline;">
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <td>3</td>
                        <td>Judul Slider Ketiga</td>
                        <td>Deskripsi 3</td>
                        <td><img src="path/to/image3.jpg" width="200" alt="images"></td>
                        <td>
                            <a href="edit_slider.html?id=3" class="btn btn-warning">Edit</a>
                            <form action="delete_slider.php?id=3" method="post" style="display:inline;">
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Judul Slider Keempat</td>
                        <td>Deskripsi 4</td>
                        <td><img src="path/to/image4.jpg" width="200" alt="images"></td>
                        <td>
                            <a href="edit_slider.html?id=4" class="btn btn-warning">Edit</a>
                            <form action="delete_slider.php?id=4" method="post" style="display:inline;">
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Judul Slider Kelima</td>
                        <td>Deskripsi 5</td>
                        <td><img src="path/to/image5.jpg" width="200" alt="images"></td>
                        <td>
                            <a href="edit_slider.html?id=5" class="btn btn-warning">Edit</a>
                            <form action="delete_slider.php?id=5" method="post" style="display:inline;">
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Judul Slider Keenam</td>
                        <td>Deskripsi 6</td>
                        <td><img src="path/to/image6.jpg" width="200" alt="images"></td>
                        <td>
                            <a href="edit_slider.html?id=6" class="btn btn-warning">Edit</a>
                            <form action="delete_slider.php?id=6" method="post" style="display:inline;">
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Judul Slider Ketujuh</td>
                        <td>Deskripsi 7</td>
                        <td><img src="path/to/image7.jpg" width="200" alt="images"></td>
                        <td>
                            <a href="edit_slider.html?id=7" class="btn btn-warning">Edit</a>
                            <form action="delete_slider.php?id=7" method="post" style="display:inline;">
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Judul Slider Kedelapan</td>
                        <td>Deskripsi 8</td>
                        <td><img src="path/to/image8.jpg" width="200" alt="images"></td>
                        <td>
                            <a href="edit_slider.html?id=8" class="btn btn-warning">Edit</a>
                            <form action="delete_slider.php?id=8" method="post" style="display:inline;">
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