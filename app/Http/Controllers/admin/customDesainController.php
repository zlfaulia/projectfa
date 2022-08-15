<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customDesain;
use Illuminate\Support\Facades\DB;

class customDesainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $custom_desains = DB::table('custom_desains')->get();
        return view('admin/customDesain.customDesain',["title" => "Custom Desain"], compact('custom_desains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin/customDesain.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'kategori' => 'required',
        //     'bahan' => 'required',
        //     'desain' => 'required',
        //     'pesan' => 'required'
        // ]);

        // // $image = $request->file('dokumentasi')->getClientOriginalName();
        // // $request->file('dokumentasi')->move('public/dokumentasi', $image);

        // customDesain::create([
        //     'kategori' =>$request->get('kategori'),
        //     'bahan' =>$request->get('bahan'),
        //     'desain' =>$request->get('desain'),
        //     'pesan' =>$request->get('pesan'),
        // ]);
        // return redirect('/admin/customDesain')->with('success', 'Dokumentasi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customDesain $customDesain
     * @return \Illuminate\Http\Response
     */
    public function show(customDesain $customDesain)
    {
        $customDesain = customDesain::find($customDesain);
        return view('admin/customDesain.detail', compact('customDesain'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customDesain $customDesain
     * @return \Illuminate\Http\Response
     */
    public function edit(customDesain $customDesain)
    {
        $customDesain = customDesain::find($customDesain);
        return view('admin/customDesain.edit', compact('customDesain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customDesain $customDesain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required',
            'bahan' => 'required',
            'desain' => 'required',
            'pesan' => 'required'
        ]);

        // $image = $request->file('dokumentasi')->getClientOriginalName();
        // $request->file('dokumentasi')->move('public/dokumentasi', $image);

        $itemcustomDesain = customDesain::findOrFail($id);//cari berdasarkan id = $id,

            $inputan = $request->all();
            $itemcustomDesain->update($inputan);

      return redirect('/admin/customDesain')->with('success', 'Dokumentasi berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customDesain $customDesain
     * @return \Illuminate\Http\Response
     */
    public function destroy(customDesain $customDesain)
    {
        $customDesain->delete();
        return redirect('/admin/customDesain')->with('success', 'Dokumentasi berhasil dihapus');
    }
}
