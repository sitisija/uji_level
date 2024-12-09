<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
class KategoriController extends Controller
{
    public function index()
    {
        $categories = Kategori::all();
        return view('category.index', compact('categories'));
    }
    public function tambah()
    {
        $categories = Kategori::get();
        return view('category.tambah', compact('categories'));
    }
    public function aksi_tambah(Request $request){
        $request->validate([
            'title'=>'required',
        ]);
        $data=[
            'title'=>$request->title,
        ];
    
        Kategori::insert($data);
        return redirect()->route('kategori');
    }
    public function edit($id){
        $categories = Kategori::where('id',$id)->first();
        return view('category.edit', compact('categories'));
    }
    public function aksi_edit(Request $request, $id)
{
    // Validasi data
    $request->validate([
        'title' => 'required',
    ]);
    $data = [
        'title' => $request->title,
    ];
    Kategori::where('id', $id)->update($data);
    return redirect()->route('kategori');
}
    public function aksi_hapus($id)
    {
        Kategori::where('id', $id)->delete();
        return redirect()->route('kategori');
    }
    
}
