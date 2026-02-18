<!DOCTYPE html>
<html>
<head>
    <title>Kategori - Beauty & Health</title>
</head>
<body>
    <h1>Daftar Produk: Beauty & Health</h1>
    @if(!empty($products))
    <ul>
        @foreach($products as $product)
            <li>{{ $product }}</li>
        @endforeach
    </ul>
    @else
    <p>Tidak ada produk untuk kategori ini.</p>
    @endif
    <a href="/">Kembali ke Home</a>
</body>
</html>