<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\laporanModal;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class laporanModalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bahans= laporanModal::all();
        return view('admin/laporanModal.laporanModal',["title" => "Laporan Modal"], compact('bahans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/laporanModal.create');
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
            'nama_modal' => 'required',
            'harga' => 'required',
        ]);

        laporanModal::create([
            'nama_modal'  =>$request->get('nama_modal'),
            'harga'  =>$request->get('harga'),
        ]);
        return redirect('/admin/laporanModal')->with('success', 'Modal berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(laporanModal $laporanModal)
    {
        $laporanModal = laporanModal::find($laporanModal);
        return view('admin/laporanModal.detail');
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
