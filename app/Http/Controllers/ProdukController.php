<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Products;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $categoryId = $request->get('category');
        $categories = Category::all();

        $products = $categoryId 
            ? Products::where('category_id', $categoryId)->get() 
            : Products::all();

        return view('product.index', compact('categories', 'products'));
    }
}

