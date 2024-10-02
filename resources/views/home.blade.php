@extends('layouts.master')

@section('title', 'Home')

@section('content')
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    @foreach ($sliders as $item)
      <div class="carousel-item active">
        <img src="{{ $item->file }}" class="d-block w-100" alt="...">
      </div>
    @endforeach
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <div class="container mt-5">
    <div class="h1 fw-bold text-center">Layanan Kami</div>
    <div class="row mt-2">
      @foreach ($services as $item)
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="border-card p-4 border-radius">
                <b>{{$item->title}}</b>
                <p>{{$item->description}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="container mt-5 mb-5">
  <div class="row">
      <div class="col-12 text-center mb-4">
          <h1 class="fw-bold">Artikel</h1>
      </div>
      @foreach ($blogs as $item)
          <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="border-radius">
                  <div class="card mb-4">
                      <img src="{{ $item->file }}" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title">{{ $item->title }}</h5>
                          <p class="card-text">{{ $item->description }}</p>
                          <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                      </div>
                  </div>
              </div>
          </div>
      @endforeach
  </div>
</div>
@endsection
