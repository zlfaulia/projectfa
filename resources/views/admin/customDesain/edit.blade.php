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
            @foreach ($customDesain as $item )
            <form method="post" action="{{ url('/admin/customDesain/'.$item->id) }}" id="myForm" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control" value="{{ $item->kategori }}">
            </div>
            <div class="form-group">
                <label>Bahan</label>
                <input type="text" name="bahan" class="form-control" value="{{ $item->bahan }}">
            </div>
            <div class="form-group">
                <label>Desain</label>
                <input type="file" name="desain" class="form-control" value="{{ $item->desain}}">
            </div>
            <div class="form-group">
                <label>Pesan</label>
                <input type="text" name="pesan" class="form-control" value="{{ $item->pesan }}">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
