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
              <li class="breadcrumb-item"><a href="#">Data Master</a></li>
              <li class="breadcrumb-item active">Barang</li>
              <li class="breadcrumb-item active">Edit Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @endsection

@section('content')
<form action="/barang/update{{$barang->id}}" method="post">
                @csrf
                <div class="container">
                    <div class="row mt-3">
    <div class="form-group col-6">
        <label for="nama">Id Barang</label>
        <input type="text" class="form-control"  name="id_barang" readOnly="" value="{{ $barang->id_barang }}" required>
    </div>
    <div class="form-group col-6">
        <label for="nama">Kode Barang</label>
        <input type="text" class="form-control"  name="barang_kode"  value="{{ $barang->barang_kode }}" required>
    </div>
    
    
    </div>
    <div class="container">
                    <div class="row mt-3">
    <div class="form-group col-6">
        <label for="nama">Nama Barang</label>
        <input type="text" class="form-control"  name="barang_nama" value="{{ $barang->barang_nama }}" required>
    </div>
    <div class="form-group col-6">
        <label for="nama">Id Jenis</label>
        <select name="id_jenis"  class="form-control ">
      <option >Pilih Nama</option>
      @foreach($jenis as $item)
      <option value="{{$item->id_jenis}}">{{$item->jenis_nama}}</option>
      @endforeach
</select>
    </div>
    
    
    </div>
    
                    <div class="row">
    <div class="form-group col-4">
        <label for="nama">Id Supplier</label>
        <select name="id_suplier"  class="form-control ">
      <option >Pilih Nama</option>
      @foreach($suplier as $item)
      <option value="{{$item->id_suplier}}">{{$item->nama}}</option>
      @endforeach
</select>
    </div>
    <div class="form-group col-4">
        <label for="nama">Harga Jual</label>
        <input type="text" class="form-control"  name="harga_jual" value="{{ $barang->harga_jual }}" required>
    </div>
    <div class="form-group col-4">
        <label for="nama">Status Barang</label>
        <input type="text" class="form-control"  name="barang_status" value="{{ $barang->barang_status }}" required>
    </div>
    </div>
    <button type="submit" class="btn btn-outline-warning mb-3">Edit</button>
    <a href="/barang" class="btn btn-danger mb-3">Kembali</a> 
    
    
  </form>  
@endsection()