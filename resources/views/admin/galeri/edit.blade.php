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
            @foreach ($galeri as $item )
            <form method="post" action="{{ url('/admin/galeri/'.$item->id) }}" id="myForm" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <img src="{{asset('public/dokumentasi/'.$item->dokumentasi) }}" style="width:100px; height:100px;">
            <div class="form-group">
                <label for="name">Dokumentasi</label>
                <input type="file" name="dokumentasi" class="form-control" id="name" value="{{ $item->dokumentasi }}">
            </div>
            <div class="form-group">
                <label for="email">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" id="email" value="{{ $item->keterangan }}">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
