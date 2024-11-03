<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
</head>
<body>
    <form action="{{ route('barang.update', $barang->id) }}" method="post">
        @csrf
        @method('PUT')

        <label>Nama Barang</label>
        <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" required>
        <br>

        <label>Jenis Barang</label>
        <input type="text" name="jenis_barang" value="{{ $barang->jenis_barang }}" required>
        <br>

        <label>Stok</label>
        <input type="text" name="stok" value="{{ $barang->stok }}" required>
        @if ($errors->has('stok'))
        <div style="color: red;">{{ $errors->first('stok') }}</div>
        @endif
        <br>

        <label>Harga Satuan</label>
        <input type="text" name="harga_satuan" value="{{ $barang->harga_satuan }}" required>
        <br>

        <label>Status</label>
        <select name="status" required>
            <option value="Tersedia" {{ $barang->status == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
            <option value="Kosong" {{ $barang->status == 'Kosong' ? 'selected' : '' }}>Kosong</option>
        </select>
        <br>

        <button type="submit">Ubah</button>
    </form>
</body>
</html>
