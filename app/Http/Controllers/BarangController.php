<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_barang' => 'required|string|max:100',
            'jenis_barang' => 'required|string|max:100',
            'stok' => 'required|integer',
            'harga_satuan' => 'required|integer',
            'status' => 'required|in:Tersedia,Kosong',
        ],
        [ 'stok.integer' => 'Stok harus berupa angka']);
        
        Barang::create($request->all()); 
        return redirect()->route('barang.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $validated = $request->validate([
            'nama_barang' => 'required|string|max:100',
            'jenis_barang' => 'required|string|max:100',
            'stok' => 'required|integer', 
            'harga_satuan' => 'required|integer', 
            'status' => 'required|in:Tersedia,Kosong', 

        ], [ 'stok.integer' => 'Stok harus berupa angka']);
        
        $barang->update($validated);
        return redirect()->route('barang.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index');
    }
}
