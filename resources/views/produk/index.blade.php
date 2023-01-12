<!DOCTYPE html>
<html>

<head>
    <title>Laravel Saya</title>
</head>

<body>
    <h3><b>Data Produk</b></h3>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Qty</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($produk as $i => $p)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->kategori }}</td>
                <td>{{ $p->qty }}</td>
                <td>{{ $p->harga_beli }}</td>
                <td>{{ $p->harga_jual }}</td>
            </tr>
            @endforeach
            </tr>
        </tbody>
    </table>
</body>

</html>
