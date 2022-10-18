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
<form action="/admin/update{{$admin->id}}" method="post">
                @csrf
                <div class="container">
                    <div class="row mt-3">
    <div class="form-group col-4">
        <label for="nama">Id Admin</label>
        <input type="text" class="form-control"  name="id_admin" readOnly="" value="{{ $admin->id_admin }}" required>
    </div>
    <div class="form-group col-4">
        <label for="nama">Username</label>
        <input type="text" class="form-control"  name="username" value="{{ $admin->username }}" required>
    </div>
    <div class="form-group col-4">
        <label for="nama">Password</label>
        <input type="text" class="form-control"  name="password" value="{{ $admin->password }}" required>
    </div>
    
    
    </div>
    
                    <div class="row">
    <div class="form-group col-4">
        <label for="nama">Level</label>
        <input type="text" class="form-control"  name="level" value="{{ $admin->level }}" required>
    </div>
    <div class="form-group col-4">
        <label for="nama">Nama</label>
        <input type="text" class="form-control"  name="nama" value="{{ $admin->nama }}" required>
    </div>
    <div class="form-group col-4">
        <label for="nama">Status</label>
        <input type="text" class="form-control"  name="status" value="{{ $admin->status }}" required>
    </div>
    </div>
    <button type="submit" class="btn btn-outline-warning mb-3">Edit</button>
    <a href="/admin" class="btn btn-danger mb-3">Kembali</a> 
    
    
  </form>  
@endsection()