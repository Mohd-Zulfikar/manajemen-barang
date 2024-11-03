@extends('layouts.app')

@section('content')

    <h1>Albums List</h1>
    <a href="{{route('barang.create')}}">Create New Barang</a>
    <ul>
        <table border="2">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>     
            </thead>
            <tbody>
                @foreach ($barang as $barangs)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$barangs->nama_barang}}</td>
                    <td>{{$barangs->jenis_barang}}</td>
                    <td>{{$barangs->stok}}</td>
                    <td>{{$barangs->harga_satuan}}</td>
                    <td>{{$barangs->status}}</td>
                    
                    <td>
                        <a href = "{{route('barang.edit', $barangs->id)}}">EDIT</a>
                        <form action="{{route('barang.destroy', $barangs->id)}}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>     
                @endforeach
            </tbody>
        </table>
    </ul>

@endsection