<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index() {
        $blog=Blogs::paginate(10);
        return view('backend.blog.index',[
            'blog'=>$blog
        ]);

    }
    public function tambah()
    {
        // Menampilkan form untuk menambah blog
        return view('backend.blog.tambah');
    }
    public function aksi_tambah(Request $request) {
        //Memastikan bahwa field title, description, dan file wajib diisi. 
        //file juga harus berupa file gambar (JPEG atau PNG) dengan ukuran maksimal 2MB.
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'required|file|mimes:jpeg,png|max:2048', // Perbaiki MIME types
        ]);
    //Mengumpulkan data dari request (input dari user) dan 
    //menyiapkan data yang akan disimpan ke database, seperti title, description, slug (slugifikasi dari title), 
    //serta created_at dan created_by (dalam hal ini nilainya 0, tapi nanti bisa diganti dengan ID user yang login).
        $data = [
            //$request->title mengambil data dari request (input user), lalu dimasukkan ke dalam array $data dengan kunci 'title'.
            'title' => $request->title,
            //$request->description berfungsi untuk mendapatkan nilai deskripsi dari form input yang diisi oleh pengguna.
            'description' => $request->description,
            //Fungsi Str::slug($request->title) mengubah teks title menjadi format slug 
            //(huruf kecil dan dipisahkan dengan tanda hubung -). 
            //Misalnya, Str::slug('Belajar Laravel') akan menjadi belajar-laravel.
            'slug' => Str::slug($request->title),
            // Biasanya, created_by berisi ID user yang login. Namun, di sini disetel ke 0,
            // mungkin karena belum ada data pengguna atau untuk testing. Di aplikasi nyata, 
            //kamu bisa menggantinya dengan auth()->user()->id.
            'created_by' => 0,
            //Fungsi date('Y-m-d h:i:s') menghasilkan format tanggal dan waktu saat ini dalam 
            //format YYYY-MM-DD HH:MM:SS. Ini menandai kapan data ini ditambahkan ke database.
            'created_at' =>date('Y-m-d h:i:s')
        ];
    //Jika ada file yang diunggah, sistem akan menyimpan 
    //file tersebut di folder public/blog dengan nama file yang unik (berdasarkan timestamp). 
    //Setelah itu, path file akan dimasukkan ke dalam array $data.
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('blog'), $filename);
            $data['file'] = 'blog/' . $filename;
        }
    // Data yang sudah disiapkan dimasukkan ke dalam tabel blogs di database menggunakan query insert().
        Blogs::insert($data);
    //Setelah data berhasil disimpan, pengguna akan dialihkan kembali ke halaman blog dengan pesan sukses.
        return redirect()->route('backend.blog')->with('success', 'Blog berhasil ditambahkan');
    }
    
}

