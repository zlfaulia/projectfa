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
            @foreach ($laporanModa as $item )
            <form method="post" action="{{ url('/admin/laporanModal/'.$item->id) }}" id="myForm" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label>Nama Modal</label>
                <input type="text" name="name" class="form-control" value="{{ $item->nama_modal }}">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="keterangan" class="form-control" value="{{ $item->harga }}">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
