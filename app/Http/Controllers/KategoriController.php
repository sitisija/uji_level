<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
class KategoriController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }
    public function tambah()
    {
        $categories = Category::get();
        return view('category.tambah', compact('categories'));
    }
    public function aksi_tambah(Request $request){
        $request->validate([
            'title'=>'required',
        ]);
        $data=[
            'title'=>$request->title,
        ];
    
        Category::insert($data);
        return redirect()->route('kategori');
    }
    public function edit($id){
        $categories = Category::where('id',$id)->first();
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
    Category::where('id', $id)->update($data);
    return redirect()->route('kategori');
}
    public function aksi_hapus($id)
    {
        Category::where('id', $id)->delete();
        return redirect()->route('kategori');
    }
    
}
