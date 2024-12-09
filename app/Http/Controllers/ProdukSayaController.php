<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;

class ProdukSayaController extends Controller
{
    public function index(Request $request)
{
    $categoryId = $request->get('category');
    $categories = Kategori::all();

    $products = Produk::when($categoryId, function ($query) use ($categoryId) {
        $query->where('category_id', $categoryId);
    })->get();

    return view('produk-saya.index', compact('categories', 'products'));
}

}

