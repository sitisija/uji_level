<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class DataProdukController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('data-produk.index', compact('products'));
    }

    public function tambah()
    {
        $categories = Category::get();
        return view('data-produk.tambah', compact('categories'));
    }

    public function aksi_tambah(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'category_id'=>'required',
            'price'=>'required',
            'file'=>'required',
            'description'=>'required'
        ]);
        $data=[
            'title'=>$request->title,
            'category_id'=>$request->category_id,
            'price'=>$request->price,
            'discount'=>$request->discount,
            'description'=>$request->description,
            'file'=>$request->file
        ];
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('products'), $filename);
            $data['file'] = 'products/' . $filename;
        }
    
        Products::insert($data);
        return redirect()->route('data.produk');
    }
    public function edit($id){
        $categories = Category::get();
        $products = Products::where('id',$id)->first();
        return view('data-produk.edit', compact('products','categories'));
    }
    public function aksi_edit(Request $request, $id)
{
    // Validasi data
    $request->validate([
        'title' => 'required',
        'description'=>'required',
        'category_id' => 'required',
        'price' => 'required|numeric',
    ]);
    $data = [
        'title' => $request->title,
        'description'=>$request->description,
        'category_id' => $request->category_id,
        'price' => $request->price,
    ];
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('products'), $filename);
        $data['file'] = 'products/' . $filename;
    }
    Products::where('id', $id)->update($data);
    return redirect()->route('data.produk');
}
    public function aksi_hapus($id){
        Products::where('id',$id)->delete();
        return redirect()->route('data.produk');
    }
}

