@extends('backend.layout.master')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Blog</h6>
        </div>
        <div class="card-body">
            <a href="tambah_blog.html" class="btn btn-primary mb-2">Tambah Blog</a>
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
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Judul Blog Pertama</td>
                            <td><img src="path/to/image1.jpg" width="200" alt="images"></td>
                            <td>
                                <a href="edit_blog.html?id=1" class="btn btn-warning">Edit</a>
                                <form action="delete_blog.php?id=1" method="post" style="display:inline;">
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Judul Blog Kedua</td>
                            <td><img src="path/to/image2.jpg" width="200" alt="images"></td>
                            <td>
                                <a href="edit_blog.html?id=2" class="btn btn-warning">Edit</a>
                                <form action="delete_blog.php?id=2" method="post" style="display:inline;">
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <td>3</td>
                            <td>Judul Blog Ketiga</td>
                            <td><img src="path/to/image3.jpg" width="200" alt="images"></td>
                            <td>
                                <a href="edit_blog.html?id=3" class="btn btn-warning">Edit</a>
                                <form action="delete_blog.php?id=3" method="post" style="display:inline;">
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Judul Blog Keempat</td>
                            <td><img src="path/to/image4.jpg" width="200" alt="images"></td>
                            <td>
                                <a href="edit_blog.html?id=4" class="btn btn-warning">Edit</a>
                                <form action="delete_blog.php?id=4" method="post" style="display:inline;">
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Judul Blog Kelima</td>
                            <td><img src="path/to/image5.jpg" width="200" alt="images"></td>
                            <td>
                                <a href="edit_blog.html?id=5" class="btn btn-warning">Edit</a>
                                <form action="delete_blog.php?id=5" method="post" style="display:inline;">
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Judul Blog Keenam</td>
                            <td><img src="path/to/image6.jpg" width="200" alt="images"></td>
                            <td>
                                <a href="edit_blog.html?id=6" class="btn btn-warning">Edit</a>
                                <form action="delete_blog.php?id=6" method="post" style="display:inline;">
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Judul Blog Ketujuh</td>
                            <td><img src="path/to/image7.jpg" width="200" alt="images"></td>
                            <td>
                                <a href="edit_blog.html?id=7" class="btn btn-warning">Edit</a>
                                <form action="delete_blog.php?id=7" method="post" style="display:inline;">
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Judul Blog Kedelapan</td>
                            <td><img src="path/to/image8.jpg" width="200" alt="images"></td>
                            <td>
                                <a href="edit_blog.html?id=8" class="btn btn-warning">Edit</a>
                                <form action="delete_blog.php?id=8" method="post" style="display:inline;">
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