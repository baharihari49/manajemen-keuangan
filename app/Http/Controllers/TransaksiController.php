<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretransaksiRequest;
use App\Http\Requests\UpdatetransaksiRequest;
use App\Models\transaksi;
use App\Models\jenis_kategori_transaksi;
use App\Models\kategori_transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.transaksi.index', [
            'kategori_transaksi' => kategori_transaksi::all(),
            'jenis_transaksi' => jenis_kategori_transaksi::all(),
            'transaksi' => transaksi::all()
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
    public function store(StoretransaksiRequest $request)
    {
        $validate = $request->validate([
            'tanggal' => 'required|max:255',
            'jumlah' => 'required|max:255',
            'kategori_transaksi_id' => 'required',
            'jenis_kategori_transaksi_id' => 'required',
            'deskripsi' => 'required'
        ]);

        $validate['user_id'] = 1;

        transaksi::create($validate);

        return redirect('/transaksi');

    }

    /**
     * Display the specified resource.
     */
    public function show(transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetransaksiRequest $request, transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(transaksi $transaksi)
    {
        transaksi::destroy(request()->uuid);
        // return redirect('/transaksi');
    }
}
