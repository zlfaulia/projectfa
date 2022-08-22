<?php

namespace App\Http\Controllers\FE;

use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\stok;
use App\Models\pesanan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class detailProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // dd($request);
        $produk =produk::where('id', $id)->first();
        $stok=stok::find($id);
        $harga=stok::where('produk_id', $id)->get();
        $warna=stok::where('produk_id', $id)->get();
        // $ukuran=stok::get()->groupBy('ukuran');
        // $harga_produk=stok::all();

        // return response()->json($stok->harga_produk);

        return view('FE/detailProduk', compact('produk', 'stok', 'harga', 'warna'));
    }

    //  public function pesan(Request $request, $id)
    // {
    //     $produk =produk::where('id', $id)->first();
    //     $stok=stok::find($id);
    //     // $harga=stok::where('produk_id', $id)->get();
    //     // $warna=stok::where('produk_id', $id)->get();
    //     $tanggal = Carbon::now();

    //     $pesanan = new pesanan;
    //     $pesanan->user_id = Auth::user()->id;
    //     $pesanan->produk_id = $produk->id;
    //     $pesanan->stok_id = $stok->id;
    //     $pesanan->tanggal_pesan = $tanggal;
    //     $pesanan->jumlah = $request->jumlah_pesan;
    //     $pesanan->catatan_pesanan=0;
    //     $pesanan->opsi_pengiriman=0;

    //     $pesanan->total_bayar = $produk->harga_produk * $request->jumlah_pesan;
    //     $pesanan->save();

    //     // dd($request);
    // }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pesan = produk::find($id);
        $beli = stok::findOrfail($id);
        // $detailPesan = stok::find($id);
        return view('FE/keranjangPesan', compact('pesan', 'beli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
