<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS - Sales Transaction</title>
    <style>
        body { font-family: sans-serif; margin: 40px; line-height: 1.6; }
        .header { border-bottom: 2px solid #333; padding-bottom: 10px; margin-bottom: 20px; }
        .table-pos { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .table-pos th, .table-pos td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        .table-pos th { background-color: #f4f4f4; }
        .total-section { margin-top: 20px; font-weight: bold; font-size: 1.2em; text-align: right; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Halaman Transaksi POS</h1>
        <p>Tanggal: {{ date('d-m-Y') }}</p>
    </div>

    <h3>Daftar Belanja</h3>
    <table class="table-pos">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Produk Contoh</td>
                <td>1</td>
                <td>Rp 10.000</td>
                <td>Rp 10.000</td>
            </tr>
        </tbody>
    </table>

    <div class="total-section">
        Total Bayar: Rp 10.000
    </div>

    <br>
    <a href="/">← Kembali ke Home</a>
</body>
</html>