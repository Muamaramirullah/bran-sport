<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk - SportBrand</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2>Daftar Produk</h2>

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

        @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>Rp {{ number_format($product->price) }}</td>
            <td>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>