<?php

namespace App\Http\Controllers\FE;

use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\stok;
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

        return view('FE/detailProduk', compact('stok','produk', 'harga', 'warna'));
    }

    //  public function pesan(Request $request)
    // {
    //     dd($request);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
