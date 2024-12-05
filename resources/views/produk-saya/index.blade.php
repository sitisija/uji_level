@extends('layouts.master')
@section('title', 'Produk Saya')
@section('content')
    <h1 class="mb-3">Produk Saya</h1>
    <div class="case-studies-block style-two mt-100">
        <div class="container">
            <div class="row row-cols-auto gx-0 gy-0 mb-4 text-center">
                <div class="col">
                    <a href="{{ route('produk.saya') }}" class="text-decoration-none">
                        <div class="card text-center border p-0">
                            <div class="card-body p-1">
                                <span class="nav-item text-button-small text-secondary px-3 pointer">
                                    Semua
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
    
                @foreach ($categories as $item)
                    <div class="col">
                        <a href="{{ route('produk.saya', ['category' => $item->id]) }}" class="text-decoration-none">
                            <div class="card text-center border p-0">
                                <div class="card-body p-1">
                                    <span class="nav-item text-button-small text-secondary px-3 pointer">
                                        {{ $item->title }}
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <div class="container">
        @if ($products->count() > 0)
            <div class="row g-4">
                @foreach ($products as $index => $item)
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card border-0 shadow-sm">
                            <div class="bg-img bora-16 overflow-hidden">
                                <img class="card-img-top bora-16" 
                                     src="{{ asset($item->file) }}" 
                                     alt="{{ $item->title }}">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">
                                    <b>Rp {{ number_format($item->price - $item->discount) }}</b>
                                    @if ($item->discount > 0)
                                        <del class="text-muted">Rp {{ number_format($item->price) }}</del>
                                    @endif
                                </p>
                                <a href="https://api.whatsapp.com/send?phone=62898387373&text=Halo, saya ingin membeli produk {{ $item->title }}" 
                                   class="btn btn-primary btn-sm">
                                   Order via WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>

                    @if (($index + 1) % 4 == 0)
                        </div><div class="row g-4 mt-3">
                    @endif
                @endforeach
            </div>
        @else
            <p class="text-center mt-4">Tidak ada produk yang ditemukan untuk kategori ini.</p>
        @endif
    </div>
@endsection
