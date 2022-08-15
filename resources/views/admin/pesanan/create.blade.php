@extends('adminlte::page')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <a class="btn btn-success mt-3 mb-5" href="{{ url('/admin/pesanan/') }}">Kembali</a>
            <div class="card-header">
            Tambah Pesanan
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ url('/admin/pesanan/') }}" id="myForm" enctype="multipart/form-data" >
            @csrf
                <div class="form-group">
                    <label for="user_id">Nama</label>
                    <select name="user_id" id="user_id" class="form-control">
                      <option value="">Nama Konsumen</option>
                      @foreach($user as $item)
                      <option value="{{ $item->id }}">{{ $item->nama }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="user_id">Alamat</label>
                    <select name="user_id" id="user_id" class="form-control">
                      <option value="">Pilih Alamat</option>
                      @foreach($user as $item)
                      <option value="{{ $item->id }}">{{ $item->alamat }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="produk_id">Nama Produk</label>
                  <select name="produk_id" id="produk_id" class="form-control">
                    <option value="">Pilih Produk</option>
                    @foreach($produk as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_produk}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="produk_id">Harga Produk</label>
                    <select name="produk_id" id="produk_id" class="form-control">
                      <option value="">Pilih Harga</option>
                      @foreach($produk as $item)
                      <option value="{{ $item->id }}">{{ $item->nama_produk}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="produk_id">Warna Produk</label>
                    <select name="produk_id" id="produk_id" class="form-control">
                      <option value="">Pilih Warna</option>
                      @foreach($produk as $item)
                      <option value="{{ $item->id }}">{{ $item->nama_produk}}</option>
                      @endforeach
                    </select>
                  </div>
              <div class="form-group">
                <label for="stok_id">Ukuran dan Variasi</label>
                <select name="stok_id" id="stok_id" class="form-control">
                  <option value="">Pilih Ukuran dan Variasi</option>
                  @foreach($stok as $item)
                  <option value="{{ $item->id }}">{{ $item->ukuran.'-'.$item->variasi }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="nama">Jumlah</label>
                <input type="text" name="jumlah" class="form-control" id="name" >
              </div>
              <div class="form-group">
                <label for="nama">Total Bayar</label>
                <input type="text" name="total_bayar" class="form-control" id="name" >
              </div>
              <div class="form-group">
                <label for="nama">Tanggal Pesan</label>
                <input type="text" name="tanggal_pesan" class="form-control" id="name" >
              </div>
              <div class="form-group">
                <label for="nama">Catatan Pesanan</label>
                <input type="text" name="catatan_pesanan" class="form-control" id="name" >
              </div>
              <div class="form-group">
                <label for="nama">Opsi Pengiriman</label>
                <input type="text" name="opsi_pengiriman" class="form-control" id="name" >
              </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection
