<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $categoryId = $request->get('category');
        $categories = Kategori::all();

        $products = $categoryId 
            ? Produk::where('category_id', $categoryId)->get() 
            : Produk::all();

        return view('produk.index', compact('categories', 'products'));
    }

    public function tambah()
    {
        $categories = Kategori::all();
        return view('produk.tambah', compact('categories'));
    }

    public function aksi_tambah(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'file' => 'required',
            'description' => 'required'
        ]);

        $data = [
            'title' => $request->title,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'discount' => $request->discount,
            'description' => $request->description,
        ];

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('products'), $filename);
            $data['file'] = 'products/' . $filename;
        }

        Produk::create($data);
        return redirect()->route('produk.index');
    }

    public function edit($id)
    {
        $categories = Kategori::all();
        $products = Produk::findOrFail($id);
        return view('produk.edit', compact('products', 'categories'));
    }

    public function aksi_edit(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric',
        ]);

        $products = Produk::findOrFail($id);
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'price' => $request->price,
        ];

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('products'), $filename);
            $data['file'] = 'products/' . $filename;
        }

        $products->update($data);
        return redirect()->route('produk.index');
    }

    public function aksi_hapus($id)
    {
        $products = Produk::findOrFail($id);
        $products->delete();
        return redirect()->route('produk.index');
    }
}
