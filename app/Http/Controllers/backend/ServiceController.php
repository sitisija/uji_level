<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
class ServiceController extends Controller
{
    public function index(){
        $services=Services::get();
        return view('backend.layanan.index',[
            'services'=>$services,
        ]);
    }
}
