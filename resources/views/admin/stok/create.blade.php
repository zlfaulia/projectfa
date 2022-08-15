@extends('adminlte::page')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header" style="text-align: center">
            Tambah Stok
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
            <form method="post" action="{{ url('/admin/stok/') }}" id="myForm" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="nama">Kode Produk</label>
                    <select class="form-control select2" name="produk_id" id="produk_id">
                        <option disabled value>Pilih Kode</option>
                        @foreach ($prod as $kode)
                        <option value="{{ $kode->id}}">{{$kode->kode_produk}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Harga Produk</label>
                    <input type="text" name="harga_produk" class="form-control" id="name" >
                </div>
                <div class="form-group">
                    <label for="nama">Ukuran</label>
                    <input type="text" name="ukuran" class="form-control" id="name" >
                </div>
                <div class="form-group">
                    <label for="nama">Variasi</label>
                    <input type="text" name="variasi" class="form-control" id="name" >
                </div>
                <div class="form-group">
                    <label for="nama">Warna</label>
                    <input type="text" name="warna" class="form-control" id="name" >
                </div>
                <div class="form-group">
                    <label for="nama">Stok</label>
                    <input type="text" name="stok" class="form-control" id="name" >
                </div>
                <div class="form-group">
                    <label for="nama">Tanggal Input</label>
                    <input type="date" name="tanggal_input" class="form-control" id="name" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-success " href="{{ url('/admin/stok/') }}">Kembali</a>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection


