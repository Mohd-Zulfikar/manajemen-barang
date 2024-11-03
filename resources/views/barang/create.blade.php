<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('barang.store')}}" method="post">
    @csrf

    <label for= "nama_barang">Nama Barang:</label>
    <input type="text" name="nama_barang" id="nama_barang" required>
    <br>
        
    <label for= "jenis_barang">Jenis Barang:</label>
    <input type="text" name="jenis_barang" id="jenis_barang" required>
    <br>
    
    <label for= "stok">Stok:</label>
    <input type="text" name="stok" id="stok" required>
    @if ($errors->has('stok'))
        <div style="color: red;">{{ $errors->first('stok') }}</div>
    @endif
    <br>

    <label for= "harga_satuan">Harga:</label>
    <input type="text" name="harga_satuan" id="harga_satuan" required>
    <br>

    <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="Tersedia">Tersedia</option>
            <option value="Kosong">Kosong</option>
        </select>
    <br>
    
    <button type="submit">Create</button>

    </form>
</body>
</html>