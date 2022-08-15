<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pesanan;

class pesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesanans = DB::table('pesanans')->get();
        return view('admin/pesanan.pesanan',["title" => "Pesanan"], compact('pesanans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/pesanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'produk_id' => 'required',
            'stok_id' => 'required',
            'jumlah' => 'required',
            'total_bayar' => 'required',
            'tanggal_pesan' => 'required',
            'catatan_pesanan' => 'required',
            'opsi_pengiriman' => 'required',

        ]);

        // $pesanan=pesanan::create([
        pesanan::create([
            'user_id' => $request->get('user_id'),
            'produk_id' => $request->get('produk_id'),
            'stok_id' => $request->get('stok_id'),
            'jumlah' => $request->get('jumlah'),
            'total_bayar' => $request->get('total_bayar'),
            'tanggal_pesan' => $request->get('tanggal_pesan'),
            'catatan_pesanan' => $request->get('catatan_pesanan'),
            'opsi_pengiriman' => $request->get('opsi_pengiriman'),

        ]);

        // dd($pesanan);

        return redirect('/admin/pesanan')->with('success', 'Pesanan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  app\Models\pesanan $pesanan
     * @return \Illuminate\Http\Response
     */
    public function show(pesanan $pesanan)
    {
        $pesanan = pesanan::find($pesanan);
        return view('admin/pesanan.detail', compact('pesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  app\Models\pesanan $pesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(pesanan $pesanan)
    {
        $pesanan = pesanan::find($pesanan);
        return view('admin/pesanan.edit', compact('pesanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  app\Models\pesanan $pesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'produk_id' => 'required',
            'stok_id' => 'required',
            'jumlah' => 'required',
            'total_bayar' => 'required',
            'tanggal_pesan' => 'required',
            'catatan_pesanan' => 'required',
            'opsi_pengiriman' => 'required',

        ]);

        $itemuser = $request->user();//ambil data user yang login
        $inputan = $request->all();

        return redirect('/admin/pesanan')->with('success', 'Pesanan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pesanan $pesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pesanan $pesanan)
    {
        $pesanan->delete();
        return redirect('/admin/pesanan')->with('success', 'Pesanan berhasil dihapus');
    }
}
