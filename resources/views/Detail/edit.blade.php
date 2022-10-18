@extends('master')

@section('nama')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Detail Transaksi</li>
              <li class="breadcrumb-item active">Edit Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @endsection

@section('content')
<form action="/detail/update{{$detail_trx->id}}" method="post">
                @csrf
                <div class="container">
                    <div class="row mt-3">
    <div class="form-group col-6">
        <label for="nama">Id Detail</label>
        <input type="text" class="form-control"  name="id_detail" readOnly="" value="{{ $detail_trx->id_detail }}" required>
    </div>
    <div class="form-group col-6">
        <label for="nama">Id Transaksi</label>
        <select name="id_transaksi"  class="form-control ">
      <option >Pilih Tgl Transaksi</option>
      @foreach($transaksi as $item)
      <option value="{{$item->id_transaksi}}">{{$item->tgl_trx}}</option>
      @endforeach
</select>
    </div>
    
    
    </div>
    <div class="container">
                    <div class="row mt-3">
    <div class="form-group col-6">
        <label for="nama">Id Barang</label>
        <select name="id_barang"  class="form-control ">
      <option >Pilih Barang}</option>
      @foreach($barang as $item)
      <option value="{{$item->id_barang}}">{{$item->barang_nama}}</option>
      @endforeach
</select>
    </div>
    <div class="form-group col-6">
        <label for="nama">Jenis</label>
        <input type="text" class="form-control"  name="jenis_trx" value="{{ $detail_trx->jenis_trx }}" required>
    </div>
    
    
    </div>
    
                    <div class="row">
    <div class="form-group col-4">
        <label for="nama">Harga</label>
        <input type="text" class="form-control"  name="harga_trx" value="{{ $detail_trx->harga_trx }}" required>
    </div>
    <div class="form-group col-4">
        <label for="nama">Jumlah</label>
        <input type="text" class="form-control"  name="jumlah_trx" value="{{ $detail_trx->jumlah_trx }}" required>
    </div>
    <div class="form-group col-4">
        <label for="nama">Detail Transaksi</label>
        <input type="text" class="form-control"  name="detail_status" value="{{ $detail_trx->detail_status }}" required>
    </div>
    </div>
    <button type="submit" class="btn btn-outline-warning mb-3">Edit</button>
    <a href="/" class="btn btn-danger mb-3">Kembali</a> 
    
    
  </form>  
@endsection()