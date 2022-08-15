@extends('adminlte::page')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <a class="btn btn-success mt-3 mb-5" href="{{ url('/admin/customDesain/') }}">Kembali</a>
            <div class="card-header">
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
            <form method="post" action="{{ url('/admin/customDesain/') }}" id="myForm" enctype="multipart/form-data" >
            @csrf
                <div class="form-group">
                    <label>Kategori</label>
                    <input type="text" name="kategori" class="form-control">
                    <label>Bahan</label>
                    <input type="text" name="bahan" class="form-control">
                    <label>Desain</label>
                    <input type="file" name="desain" class="form-control">
                    <label>Pesan</label>
                    <input type="text" name="pesan" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection
