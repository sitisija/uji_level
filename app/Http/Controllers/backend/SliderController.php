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
}
