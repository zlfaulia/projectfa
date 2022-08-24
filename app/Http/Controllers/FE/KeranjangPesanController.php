<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\stok;
use App\Models\pesanan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class KeranjangPesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $produk =produk::where('id', $id)->first();
        $pesan = produk::find($id);
        $jumlah = request()->get('jumlah_pesan'); // ambil get dari url parameter (?jumlah_pesanan=3)
        $beli = stok::find(request()->get('stok_id')); // ambil get dari url parameter (&stok_id=3)
        // $jumlah = pesanan::find($id);


        // dd($beli);
        // $beli = stok::with('pesanan')->get(); // value with untuk memanggil nama dari function dan get() mengambil seluruh data
        // jika ingin mengambil hanya 1 data gunakan first()
        // $pesan = produk::where('produk_id', $id)->get();
        // $co = pesanan::find($id);
        return view('FE/keranjangPesan', compact('produk','pesan', 'beli', 'jumlah'));
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @param  int  $id
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $detailPesan = stok::find($id);
        // return view('FE/detailPesan', compact('detailPesan'));
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
