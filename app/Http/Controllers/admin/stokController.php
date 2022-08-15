<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\stok;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class stokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stoks= stok::with('produk')->paginate(5);
        // $stoks = DB::table('stoks')->get();
        return view('admin/stok.stok',compact('stoks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prod = produk::all();
        return view('admin/stok.create',compact('prod'));
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
            'produk_id' => 'required',
            'harga_produk' => 'required',
            'ukuran' => 'required',
            'variasi' => 'required',
            'warna' => 'required',
            'stok' => 'required',
            'tanggal_input' => 'required',
        ]);

        $stok=new stok();
        $stok->produk_id=$request->produk_id;
        $stok->harga_produk=$request->harga_produk;
        $stok->ukuran=$request->ukuran;
        $stok->variasi=$request->variasi;
        $stok->warna=$request->warna;
        $stok->stok=$request->stok;
        $stok->tanggal_input=$request->tanggal_input;
        $stok->save();

        // dd($request->all());

         return redirect('/admin/stok')->with('success', 'Stok berhasil diupdate');
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
        $stok = stok::findorfail($id);
        return view('admin/stok.edit',compact('stok'));
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
        $stok = stok::findorfail($id); //cari berdasarkan id = $id,
        $stok->update($request->all());
        return redirect('/admin/stok')->with('success', 'Stok berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stok = stok::findorfail($id);
        $stok->delete();
        return redirect('/admin/stok')->with('success', 'Stok berhasil dihapus');
    }
}
