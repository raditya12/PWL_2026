<!DOCTYPE html>
<html>
<head>
    <title>Kategori - Food & Beverage</title>
</head>
<body>
    <h1>Daftar Produk: {{ ucfirst($type) }} </h1>
    @if(!empty($products))
    <ul>
        @foreach($products as $product)
            <li>{{ $product }}</li>
        @endforeach
    </ul>
    @else
    <p>Tidak ada produk untuk jenis ini.</p>
    @endif
    <a href="/">Kembali ke Home</a>
</body>
</html>