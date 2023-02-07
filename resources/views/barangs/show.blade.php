@extends('barangs.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2> Show barang</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('barangs.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Barang:</strong>
                {{ $barang->namabrg }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Barang:</strong>
                {{ $barang->jmlhbrg }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Barang:</strong>
                {{ $barang->hrgbrg }}
            </div>
        </div>
    </div>
@endsection