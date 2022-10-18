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
              
              <li class="breadcrumb-item active">Transaksi</li>
              <li class="breadcrumb-item active">Edit Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @endsection

@section('content')
<form action="/transaksi/update{{$transaksi->id}}" method="post">
                @csrf
                <div class="container">
                    <div class="row mt-3">
    <div class="form-group  col-4">
        <label for="nama">Id Transaksi</label>
        <input type="text" class="form-control"  name="id_transaksi" readOnly="" value="{{ $transaksi->id_transaksi }}" required>
    </div>
    <div class="form-group col-4">
        <label for="nama">Id Admin</label>
        <select name="id_admin"  class="form-control ">
       
      <option >Pilih Level</option>
      @foreach($admin as $item)
      <option value="{{$item->id_admin}}">{{$item->level}}</option>
      @endforeach
</select>
    </div>
    <div class="form-group col-4">
        <label for="nama">Tanggal Transaksi</label>
        <input type="date" class="form-control"  name="tgl_trx" value="{{ $transaksi->tgl_trx }}" required>
    </div>
    </div>
    <div class="row">
    <div class="form-group col-6">
        <label for="nama">No Nota</label>
        <input type="text" class="form-control"  name="no_nota" value="{{ $transaksi->no_nota }}" required>
    </div>
    <div class="form-group col-6">
        <label for="nama">Status Transaksi</label>
        <input type="text" class="form-control"  name="status_trx" value="{{ $transaksi->status_trx }}" required>
    </div>
    </div>
    <button type="submit" class="btn btn-outline-warning mb-3">Edit</button>
    <a href="/transaksi" class="btn btn-danger mb-3">Kembali</a> 
    </div>
  </form>  
@endsection()