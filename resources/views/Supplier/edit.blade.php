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
              <li class="breadcrumb-item active">Supplier</li>
              <li class="breadcrumb-item active">Edit Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @endsection

@section('content')
<form action="/supplier/update{{$supplier->id}}" method="post">
                @csrf
                <div class="container">
                    <div class="row mt-3">
    <div class="form-group  col-4">
        <label for="nama">Id Supplier</label>
        <input type="text" class="form-control"  name="id_suplier" readOnly="" value="{{ $supplier->id_suplier }}" required>
    </div>
    <div class="form-group col-4">
        <label for="nama">Nama</label>
        <input type="text" class="form-control"  name="nama" value="{{ $supplier->nama }}" required>
    </div>
    <div class="form-group col-4">
        <label for="nama">Alamat</label>
        <input type="text" class="form-control"  name="alamat" value="{{ $supplier->alamat }}" required>
    </div>
    </div>
    <div class="row">
    <div class="form-group col-6">
        <label for="nama">Phone</label>
        <input type="text" class="form-control"  name="phone" value="{{ $supplier->phone }}" required>
    </div>
    <div class="form-group col-6">
        <label for="nama">Status</label>
        <input type="text" class="form-control"  name="status" value="{{ $supplier->status }}" required>
    </div>
    </div>
    <button type="submit" class="btn btn-outline-warning mb-3">Edit</button>
    <a href="/supplier" class="btn btn-danger mb-3">Kembali</a> 
    </div>
  </form>  
@endsection()