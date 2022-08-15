@extends('adminlte::page')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit Kategori
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
            {{-- @foreach ($stok as $item ) --}}
            <form method="post" action="{{ url('/admin/stok/'.$stok->id)}}" id="myForm" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label for="nama">Harga Produk</label>
                <input type="text" name="harga_produk" class="form-control" value="{{ $stok->harga_produk}}">
            </div>
            <div class="form-group">
                <label for="nama">Ukuran</label>
                <input type="text" name="ukuran" class="form-control" value="{{ $stok->ukuran}}" >
            </div>
            <div class="form-group">
                <label for="nama">Variasi</label>
                <input type="text" name="variasi" class="form-control" value="{{ $stok->variasi}}" >
            </div>
            <div class="form-group">
                <label for="nama">Warna</label>
                <input type="text" name="warna" class="form-control" value="{{ $stok->warna}}" >
            </div>
            <div class="form-group">
                <label for="nama">Stok</label>
                <input type="text" name="stok" class="form-control" value="{{ $stok->stok}}" >
            </div>
            <div class="form-group">
                <label for="nama">Tanggal Input</label>
                <input type="date" name="tanggal_input" class="form-control" value="{{ $stok->tanggal_input}}" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            {{-- @endforeach --}}
            </div>
        </div>
    </div>
</div>
@endsection
