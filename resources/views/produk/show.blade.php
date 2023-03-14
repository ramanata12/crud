@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <h4>{{ $produk->nama_produk }}</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('images/' . $produk->gambar) }}" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <p>{{ $produk->deskripsi }}</p>
                        <p>Harga: Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection