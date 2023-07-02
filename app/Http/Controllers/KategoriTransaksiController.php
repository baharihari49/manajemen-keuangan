<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storekategori_transaksiRequest;
use App\Http\Requests\Updatekategori_transaksiRequest;
use App\Models\kategori_transaksi;

class KategoriTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.kategori_transaksi.index', [
            'kategori_transaksi' => kategori_transaksi::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storekategori_transaksiRequest $request)
    {
        $validate = $request->validate([
            'nama' => 'required|max:255',
            'jenis_kategori_transaksi_id' => 'required',
        ]);

        kategori_transaksi::create($validate);

        return redirect('/transaksi');
    }

    /**
     * Display the specified resource.
     */
    public function show(kategori_transaksi $kategori_transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kategori_transaksi $kategori_transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatekategori_transaksiRequest $request, kategori_transaksi $kategori_transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kategori_transaksi $kategori_transaksi)
    {
        //
    }
}
