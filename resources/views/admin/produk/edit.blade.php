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
                @foreach ($produk as $item )
                <form method="post" action="{{ url('/admin/produk/'.$item->id) }}" id="myForm" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Kode Produk</label>
                        <input type="text" name="kode_produk" class="form-control" id="name"
                            value="{{ $item->kode_produk }}" readonly="">
                    </div>
                    <img src="{{asset('public/gambar_produk/'.$item->gambar_produk) }}" style="width:100px; height:100px;">
                    <div class="form-group">
                        <label for="name">Gambar Produk</label>
                        <input type="file" name="gambar_produk" class="form-control" id="name"
                            value="{{ $item->gambar_produk }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control" id="email"
                            value="{{ $item->nama_produk }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Deskripsi Produk</label>
                        <input type="text" name="deskripsi_produk" class="form-control" id="name"
                            value="{{ $item->deskripsi_produk }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
