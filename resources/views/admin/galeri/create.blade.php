@extends('adminlte::page')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header" style="text-align: center">
            Tambah Dokumentasi
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
            <form method="post" action="{{ url('/admin/galeri/') }}" id="myForm" enctype="multipart/form-data" >
            @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" class="form-control">
                    <label>Dokumentasi</label>
                    <input type="file" name="dokumentasi" class="form-control">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control">
                </div>
                <a class="btn btn-success" href="{{ url('/admin/galeri/') }}">Kembali</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection
