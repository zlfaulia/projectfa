@extends('adminlte::page')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Produk
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">

                    <li class="list-group-item"><b>Kode Produk : </b>{{$produk->kode_produk}}</li>
                    <li class="list-group-item"><b>Gambar Produk : </b><img src="{{asset('public/gambar_produk/'.$produk->gambar_produk) }}" style="width:100px; height:100px;"></li>
                    <li class="list-group-item"><b>Nama Produk : </b>{{$produk->nama_produk}}</li>
                    <li class="list-group-item"><b>Deskripsi Produk : </b>{{$produk->deskripsi_produk}}</li>

                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ url('/admin/produk') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection
