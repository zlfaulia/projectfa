@extends('adminlte::page')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Custom Desain
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach ($customDesain as $item)
                    <li class="list-group-item"><b>Kategori: </b>{{$item->kategori}}</li>
                    <li class="list-group-item"><b>Bahan: </b>{{$item->bahan}}</li>
                    <li class="list-group-item"><b>Desain: </b>{{$item->desain}}</li>
                    <li class="list-group-item"><b>Pesan: </b>{{$item->pesan}}</li>
                    @endforeach
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ url('/admin/customDesain') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection
