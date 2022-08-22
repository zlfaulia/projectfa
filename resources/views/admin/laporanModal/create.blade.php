@extends('adminlte::page')

@section('content')
    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header" style="text-align: center">
                    Tambah Modal
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
                    <form method="post" action="{{ url('/admin/laporanModal/') }}" id="myForm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama Modal</label>
                            <input type="text" name="nama_modal" class="form-control">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control">
                        </div>
                        <a class="btn btn-success" href="{{ url('/admin/laporanModal/') }}">Kembali</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
