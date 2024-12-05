<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
</head>
<body>
    <h1>Produk</h1>

    <form method="get" action="{{ route('produk.index') }}">
        <label for="category">Kategori:</label>
        <select name="category" id="category">
            <option value="">Semua Kategori</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        <button type="submit">Filter</button>
    </form>

    <h2>Daftar Produk</h2>
    <ul>
        {{-- @foreach($products as $product)
            <li>{{ $products->name }} - {{ $products->category->name }}</li>
        @endforeach --}}
    </ul>
</body>
</html>
