<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sliders;

class SliderController extends Controller
{
    public function index(){
        $sliders=Sliders::get();
        return view('backend.sliders.index',[
            'sliders'=>$sliders
        ]);
    }
}
