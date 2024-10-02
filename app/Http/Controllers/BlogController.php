<?php

namespace App\Http\Controllers;
use App\Models\Blogs;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        $blogs=Blogs::orderBy('id','desc')->get();
        $blog_terbaru=Blogs::orderBy('id','desc')->limit(3)->get();
        $blog_lainnya=Blogs::orderBy('id','asc')->get();
        return view( 'blog',[
            'blogs'=>$blogs,
            'blog_terbaru'=>$blog_terbaru,
            'blog_lainnya'=>$blog_lainnya
        ]);
    }
    public function blogdetail($slug) {
        $blog=Blogs::where('slug',$slug)->first();
        $blog_terbaru=Blogs::orderBy('id','asc')->limit(2)->get();
        return view('blogdetail', [
            'blog' => $blog,
            'blog_terbaru'=>$blog_terbaru,
        ]);
    }
}
