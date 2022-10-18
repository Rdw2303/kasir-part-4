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
              <li class="breadcrumb-item active">Jenis</li>
              <li class="breadcrumb-item active">Edit Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @endsection

@section('content')
<form action="/jenis/update{{$jenis->id}}" method="post">
                @csrf
                <div class="container">
    <div class="form-group mt-3">
        <label for="nama">Id Jenis</label>
        <input type="text" class="form-control"  name="id_jenis" readOnly="" value="{{ $jenis->id_jenis }}" required>
    </div>
    <div class="form-group">
        <label for="nama">Jenis Nama</label>
        <input type="text" class="form-control"  name="jenis_nama" value="{{ $jenis->jenis_nama }}" required>
    </div>
    <div class="form-group">
        <label for="nama">Jenis Status</label>
        <input type="text" class="form-control"  name="jenis_status" value="{{ $jenis->jenis_status }}" required>
    </div>
    <button type="submit" class="btn btn-outline-warning mb-3">Edit</button>
    <a href="/jenis" class="btn btn-danger mb-3">Kembali</a> 
    </div>
  </form>  
@endsection()