<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\produk;
use Illuminate\Support\Facades\DB;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = DB::table('produks')->get();
        return view('admin/produk.produk',["title" => "Produk"], compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/produk.create');
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
            'gambar_produk' => 'required',
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'stok_produk' => 'required',
            'deskripsi_produk' => 'required'
        ]);

        $image = $request->file('gambar_produk')->getClientOriginalName();
        $request->file('gambar_produk')->move('public/gambar_produk', $image);

        produk::create([
            'gambar_produk' => $image,
            'nama_produk' => $request->get('nama_produk'),
            'harga_produk' => $request->get('harga_produk'),
            'stok_produk' => $request->get('stok_produk'),
            'deskripsi_produk' => $request->get('deskripsi_produk'),

        ]);

        // produk::create($request->all());

        return redirect('/admin/produk')->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  app\Models\produk $produk
     * @return \Illuminate\Http\Response
     */
    public function show(produk $produk)
    {
        $produk = produk::find($produk);
        return view('admin/produk.detail', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produk $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(produk $produk)
    {
        $produk = produk::find($produk);
        return view('admin/produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produk $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar_produk' => 'required',
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'stok_produk' => 'required',
            'deskripsi_produk' => 'required'
        ]);

        $image = $request->file('gambar_produk')->getClientOriginalName();
        $request->file('gambar_produk')->move('public/gambar_produk', $image);

        $itemproduk = Produk::findOrFail($id);//cari berdasarkan id = $id,

            $inputan = $request->all();
            $inputan['gambar_produk'] = $image;
            $itemproduk->update($inputan);

         // jika data berhasil diupdate, akan kembali ke halaman utama
         return redirect('/admin/produk')
         ->with('success', 'Produk berhasil diupdate');

        // $request->validate([
        //     'gambar_produk' => 'required',
        //     'nama_produk' => 'required',
        //     'harga_produk' => 'required',
        //     'stok_produk' => 'required',
        //     'deskripsi_produk' => 'required'
        // ]);

        // $produk = Produk::findOrFail($id);
        // $image = $request->file('gambar_produk')->getClientOriginalName();
        // $request->file('gambar_produk')->move('public/gambar_produk', $image);
        // $data = [
        //     'gambar_produk' => $image,
        //     'nama_produk' => $request->get('nama_produk'),
        //     'harga_produk' => $request->get('harga_produk'),
        //     'stok_produk' => $request->get('stok_produk'),
        //     'deskripsi_produk' => $request->get('deskripsi_produk'),
        // ]

        //  produk::update($data);
        // $datas->sa
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produk $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(produk $produk)
    {
        $produk->delete();
        return redirect('/admin/produk')->with('success', 'Produk berhasil dihapus');
    }
}
