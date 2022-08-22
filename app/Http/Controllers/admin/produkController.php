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
    public function index(Request $request)
    {
        $produks = produk::all();
        return view('admin/produk.produk',["title" => "Produk"], compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = produk::all();
        $pr = DB::table('produks')->select(DB::raw('MAX(RIGHT(kode_produk,3)) as kode'));
        $kode="";
        if ($pr->count()>0)
        {
            foreach($pr->get() as $p)
            {
                $tmp = ((int)$p->kode)+1;
                $kode = sprintf("%03s", $tmp);
            }
        }else{
            $kode = "001";
        }
        // return "P-".$kode;
        return view('admin/produk.create', compact('produk', 'kode'));
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
            'kode_produk' => 'required',
            'gambar_produk' => 'required',
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required'
        ]);

        $image = $request->file('gambar_produk')->getClientOriginalName();
        $request->file('gambar_produk')->move('public/gambar_produk', $image);

        $itemuser = $request->user();//ambil data user yang login
        $inputan = $request->all();
        $inputan['user_id'] = $itemuser->id;

        $inputan['kode_produk'] = $request->get('kode_produk');
        $inputan['gambar_produk'] = $image;
        $inputan['nama_produk'] = $request->get('nama_produk');
        $inputan['deskripsi_produk'] = $request->get('deskripsi_produk');
        $itemproduk = produk::create($inputan);

        return redirect('/admin/produk')->with('success', 'Produk berhasil ditambahkan');
    }
        // $itemuser = $request->user();//ambil data user yang login
        // $inputan = $request->all();
        // // $kode_produk = produk::get()->count();
        // // $kode_produk = produk::where('user_id', $itemuser->id)->count();
        // $inputan['user_id'] = $itemuser->id;
        // // untuk kode abjad awal adalah P selalu bertambah 1
        // // $inputan['kode_produk'] = 'P'.str_pad(($kode_produk + 1),'3', '0', STR_PAD_LEFT);
        // $inputan['gambar_produk'] = $image;
        // $inputan['nama_produk'] = $request->get('nama_produk');
        // $inputan['deskripsi_produk'] = $request->get('deskripsi_produk');
        // $itemproduk = produk::create($inputan);
        // return redirect('/admin/produk')->with('success', 'Produk berhasil ditambahkan');

    /**
     * Display the specified resource.
     *
     * @param  app\Models\produk $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::findOrFail($id);
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
            'kode_produk' => 'required',
            'gambar_produk' => 'required',
            'nama_produk' => 'required',
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
