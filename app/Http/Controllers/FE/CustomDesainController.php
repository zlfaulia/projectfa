<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use App\Models\customDesain;
use Illuminate\Http\Request;

class CustomDesainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('FE/customDesain');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('FE/customDesain');
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
            'kategori' => 'required',
            'bahan' => 'required',
            'desain' => 'required',
            'pesan' => 'required'
        ]);

        // $image = $request->file('dokumentasi')->getClientOriginalName();
        // $request->file('dokumentasi')->move('public/dokumentasi', $image);

        customDesain::create([
            'kategori' =>$request->get('kategori'),
            'bahan' =>$request->get('bahan'),
            'desain' =>$request->get('desain'),
            'pesan' =>$request->get('pesan'),
        ]);
        return redirect('/FE/customDesain')->with('success', 'Dokumentasi berhasil ditambahkan');
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
