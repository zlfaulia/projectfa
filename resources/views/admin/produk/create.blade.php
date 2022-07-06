@extends('adminlte::page')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <a class="btn btn-success mt-3 mb-5" href="{{ url('/admin/produk/') }}">Kembali</a>
            <div class="card-header">
            Tambah Produk
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
            <form method="post" action="{{ url('/admin/produk/') }}" id="myForm" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="nama">Gambar Produk</label>
                    <input type="file" name="gambar_produk" class="form-control" id="name" >
                    <label for="nama">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" id="name" >
                    <label for="nama">Harga Produk</label>
                    <input type="text" name="harga_produk" class="form-control" id="name" >
                    <label for="nama">Stok Produk</label>
                    <input type="text" name="stok_produk" class="form-control" id="name" >
                    <label for="nama">Deskripsi Produk</label>
                    <input type="text" name="deskripsi_produk" class="form-control" id="name" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection
