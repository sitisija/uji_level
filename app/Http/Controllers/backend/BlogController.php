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
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'required|file|mimes:jpeg,png|max:2048', // Perbaiki MIME types
        ]);
    
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
            'created_by' => 0,
            'created_at' =>date('Y-m-d h:i:s')
        ];
    
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('blog'), $filename);
            $data['file'] = 'blog/' . $filename;
        }
    
        Blogs::insert($data);
    
        return redirect()->route('backend.blog')->with('success', 'Blog berhasil ditambahkan');
    }
    public function aksi_hapus($id){
        $ambilDataBlog = Blogs::where('id', $id)->first();
        Blogs::where('id', $id)->delete();
        $this->hapus_gambar(public_path($ambilDataBlog->file));
        return redirect()->back()->with('success', 'Blog berhasil dihapus');
    }
    
    protected function hapus_gambar($gambar){
        if (file_exists($gambar)) {
            unlink($gambar);
        }
    }
    public function edit($id) {
        $blog = Blogs::findOrFail($id);
        return view('backend.blog.edit', compact('blog'));
    }
    
}

