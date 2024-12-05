@extends('layouts.master')
@section('content')
<h1 class="mb-3">Edit</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $item)
            <p>{{ $item }}</p>
        @endforeach
    </div>
@endif

<form class="user" action="{{ route('data.produk.aksi_edit', $products->id)  }}" enctype="multipart/form-data" method="post">
    @csrf
    <div class="form-group mb-3">
        <label for="title">Judul</label>
        <input type="text" name="title" class="form-control form-control-user" id="title" placeholder="Masukan judul" value="{{ old('title') }}">
    </div>

    <div class="form-group mb-3">
        <label for="description">Deskripsi</label>
        <textarea name="description" class="form-control" id="description" placeholder="Masukan deskripsi" cols="30" rows="3">{{ old('description') }}</textarea>
    </div>

    <div class="form-group mb-3">
        <label for="category_id">Kategori</label>
        <select name="category_id" class="form-control" id="category_id">
            <option value="">Pilih Kategori</option>
            @foreach ($categories as $item)
                <option value="{{$item->id}}" {{ old('category_id') == $item->id ? 'selected' : '' }}>{{$item->title}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group mb-3">
        <label for="price">Harga</label>
        <input type="number" name="price" class="form-control form-control-user" id="price" placeholder="Masukan harga" value="{{ old('price') }}">
    </div>

    <div class="form-group mb-3">
        <label for="discount">Diskon</label>
        <input type="number" name="discount" class="form-control form-control-user" id="discount" placeholder="Masukan diskon" value="{{ old('discount') }}">
    </div>

    <div class="form-group mb-3">
        <label for="file">File Gambar</label>
        <input type="file" name="file" accept="image/*, .pdf, .docx" class="form-control form-control-user" id="file">
    </div>

    <div>
        <button type="submit" class="btn btn-primary btn-user">
            Edit 
        </button>
    </div>
</form>
@endsection
