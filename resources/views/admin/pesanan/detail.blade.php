@extends('adminlte::page')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Pesanan
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach ($pesanan as $item)
                    <li class="list-group-item"><b>Nama Konsumen: </b>{{$item->user->name}}</li>
                    <li class="list-group-item"><b>Alamat Pengiriman: </b>{{$item->user->alamat}}</li>
                    <li class="list-group-item"><b>Nama Produk: </b>{{$item->produk->nama_produk}}</li>
                    <li class="list-group-item"><b>Ukuran: </b>{{$item->stok->ukuran.'-'.$item->stok->variasi}}</li>
                    <li class="list-group-item"><b>Jumlah: </b>{{$item->jumlah}}</li>
                    <li class="list-group-item"><b>Total Bayar: </b>{{$item->total_bayar}}</li>
                    <li class="list-group-item"><b>Tanggal Pesan: </b>{{$item->tanggal_pesan}}</li>
                    <li class="list-group-item"><b>Catatan Pesanan: </b>{{$item->catatan_pesanan}}</li>
                    <li class="list-group-item"><b>Opsi Pengiriman: </b>{{$item->opsi_pengiriman}}</li>
                    @endforeach
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ url('/admin/pesanan') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection
