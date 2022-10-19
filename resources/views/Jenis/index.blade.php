<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
@extends('master')

@section('nama')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Jenis</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Master</a></li>
              <li class="breadcrumb-item active">Jenis</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @endsection

@section('content')

<div class="card-header">
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="card-body">
  <button type="button" class="btn btn-outline-info"  data-bs-toggle="modal" data-bs-target="#exampleModal">tambah</button>
 
                
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th scope="col">Id Jenis</th>
                  <th scope="col">Jenis Nama</th>
                  <th scope="col">Jenis Status</th>
                  <th scope="col">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($jenis as $j)
                <tr>
                    <td>{{$j->id_jenis}}</td>
                    <td>{{$j->jenis_nama}}</td>
                    <td>{{$j->jenis_status}}</td>
                   
                    
                
                  <td> 
                  
                  <a href="/jenis/edit{{$j->id}}" class="btn btn-warning">Edit</a> 
                  <a href="/jenis/hapus{{$j->id}}" class="btn btn-danger">Delete</a> 

                  </td>
                  </tr>
                  @endforeach
                  </tbody>
                  
                </table>
              </div>
              <form action="/jenis/create" method="post">
                @csrf
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="form-group">
  
  <label for="nama">Jenis Nama</label>
    <input type="text" class="form-control"  name="jenis_nama"  required>
    <label for="nama">Jenis Status</label>
    <input type="text" class="form-control"  name="jenis_status"  required>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>  
  </form>  
  
              
              @endsection
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
