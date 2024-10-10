<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;
class BlogController extends Controller
{
    public function index(){
        $blogs=Blogs::get();
        return view('backend.blog.index',[
            'blogs'=>$blogs,
        ]);
    }
}
