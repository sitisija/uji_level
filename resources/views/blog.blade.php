@extends('layouts.master')

@section('title', 'Blog')

@section('content')
<div class="container mt-5">
    <div class="row mt-2">
        <div class="col-8 p-4">
          @foreach ($blogs as $item)
            <div class="row my-4">
                <div class="col-5">
                    <img src="{{$item->file}}" class="card-img-top w-100 h-100" alt="Gambar Blog 1">
                </div>
                <div class="col-7">
                    <h3>{{$item->title}}</h3>
                    <p>{{$item->date}}</p>
                    <a href="{{ route('blogdetail',$item->slug)}}" class="text-black">Read More</a>
                  </div>
            </div>
            @endforeach
        </div>
        <div class="col-4 p-4 ">
          <b>Blog Terbaru</b>
          @foreach ($blog_terbaru as $item)
          <div class="row my-3">
              <div class="col-3">
                  <img src="{{$item->file}}" class="card-img-top" alt="Gambar Blog 2" style="width: 100%; height: 100px; object-fit: cover;">
              </div>
              <div class="col-9">
                  <h5>{{$item->title}}</h5>
                  <p>{{$item->date}}</p>
              </div>
          </div>
          @endforeach 
      </div>         
<div class="container">
    <h3>Blog Lainnya</h3>
    <div class="row">
        <div class="col-6">
          @foreach ($blog_lainnya as $item)
          <div class="row my-3">
            <div class="col-3 ">
              <img src="{{$item->file}}" class="card-img-top" alt="Gambar Blog 2" style="width: 100%; height: 100px; object-fit: cover;">
            </div>
            <div class="col-9">
              <h5>{{$item->title}}</h5>
              <p>{{$item->date}}</p>
              <a href="{{ route('blogdetail',$item->slug)}}" class="text-black">Read More</a>
            </div>
          </div>
          @endforeach
        </div>
    </div>
@endsection
