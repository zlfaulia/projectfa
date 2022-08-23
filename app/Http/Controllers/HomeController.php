<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $produks = Produk::orderBy('nama_produk', 'asc')->limit(10)->paginate(2);
        $galeris = DB::table('galeris')->limit(4)->get();

        $data = array(
            'produks' => $produks,
            'galeris' => $galeris,
        );
        
        if (Auth::user()->role == 'admin') {
            return view('home');
        } else {
            return view('FE.dashboard', $data)->with('no', ($request->input('page') - 1) * 2);
            # code...
        }
        
    }
}
