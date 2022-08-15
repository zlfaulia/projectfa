@extends('adminlte::page')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header" style="text-align: center">
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
                    <label for="nama">Kode Produk</label>
                    <input type="text" name="kode_produk" class="form-control" readonly="" value="{{'P-'.$kode}}" id="name">
                    <label for="nama">Gambar Produk</label>
                    <input type="file" name="gambar_produk" class="form-control" id="name" >
                    <label for="nama">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" id="name" >
                    <label for="nama">Deskripsi Produk</label>
                    <input type="text" name="deskripsi_produk" class="form-control" id="name" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-success " href="{{ url('/admin/produk/') }}">Kembali</a>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection
