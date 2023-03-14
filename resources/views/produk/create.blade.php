@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Produk</div>

                <div class="panel-body">
                    {!! Form::open(array('route' => 'produk.store','method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
                    <div class="form-group {{ $errors->has('nama_produk') ? 'has-error' : '' }}">
                        {!! Form::label('Nama Produk') !!}
                        {!! Form::text('nama_produk', null, array('placeholder' => 'Nama Produk','class' => 'form-control')) !!}
                        <span class="text-danger">{{ $errors->first('nama_produk') }}</span>
                    </div>
                    <div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : '' }}">
                        {!! Form::label('Deskripsi') !!}
                        {!! Form::textarea('deskripsi', null, array('placeholder' => 'Deskripsi','class' => 'form-control','style'=>'height:100px')) !!}
                        <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                    </div>
                    <div class="form-group {{ $errors->has('harga') ? 'has-error' : '' }}">
                        {!! Form::label('Harga') !!}
                        {!! Form::number('harga', null, array('placeholder' => 'Harga','class' => 'form-control')) !!}
                        <span class="text-danger">{{ $errors->first('harga') }}</span>
                    </div>
                    <div class="form-group {{ $errors->has('gambar') ? 'has-error' : '' }}">
                        {!! Form::label('Gambar') !!}
                        {!! Form::file('gambar', array('class' => 'form-control')) !!}
                        <span class="text-danger">{{ $errors->first('gambar') }}</span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Tambah</button>
                        <a href="{{ route('produk.index') }}" class="btn btn-danger">Kembali</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection