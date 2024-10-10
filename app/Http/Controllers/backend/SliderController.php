<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sliders;
Use App\Models\Blogs;

class SliderController extends Controller
{
    public function index(){
        $blogs=Blogs::get();
        $sliders=Sliders::get();
        return view('backend.sliders.index',[
            'sliders'=>$sliders,
            'blogs'=>$blogs,
        ]);
    }
    public function tambah()
    {
        // Menampilkan form untuk menambah blog
        return view('backend.sliders.tambah');
    }
    public function aksi_tambah()
    {
        
    }
}
