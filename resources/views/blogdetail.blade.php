@extends('layouts.master')

@section('title', 'Blog Detail')

@section('content')
<div class="container mt-5">
    <div class="row mt-2">
        <div class="col-8 p-4 ">
            <div class="row">
                <div class="col-12">
                    <img src="{{asset($blog->file)}}" class="card-img-top border-radius h-100 w-100"  alt="Gambar Blog 1">
                </div>
                <div class="col-12 ">
                    <h2 class="mb-3">{{$blog->title}}</h2>
                    <h6>{{$blog->description}}</h6>
                   <p>{{$blog->slug}}</p>
                   <p>{{$blog->date}}</p>
                </div>
            </div>
        </div>
        
        <div class="col-4 p-4 ">
            <b>Blog Terbaru</b>
            @foreach ($blog_terbaru as $item)
            <div class="row mt-3">
                <div class="col-3  ">
                    <img src="{{asset($item->file)}}" class="card-img-top" alt="Gambar Blog 2" style="width: 100%; height: 100px; object-fit: cover;">
                </div>
                <div class="col-9  ">
                    <h2 class="mb-3">{{$item->title}}</h2>
                    <p>{{$item->date}}</p>
                </div>
              </div>              
              @endforeach
        </div>
    </div>
</div>
@endsection
