<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
@extends('master')

@section('nama')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Master</a></li>
              <li class="breadcrumb-item active">Admin</li>
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
  <button type="button" class="btn btn-outline-info"  data-bs-toggle="modal" data-bs-target="#exampleModal">tambah</button>
               
                
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th scope="col">Id Admin</th>
                  <th scope="col">Username</th>
                  <th scope="col">Password</th>
                  <th scope="col">Level</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($admin as $a)
                <tr>
                    <td>{{$a->id_admin}}</td>
                    <td>{{$a->username}}</td>
                    <td>{{$a->password}}</td>
                    <td>{{$a->level}}</td>
                    <td>{{$a->nama}}</td>
                    <td>{{$a->status}}</td>
                    
                
                  <td> 
                  <a href="/admin/edit{{$a->id}}" class="btn btn-warning">Edit</a>  
       
                  <a href="/admin/hapus{{$a->id}}" class="btn btn-danger">Delete</a> 

                  </td>
                  </tr>
                  @endforeach
                  </tbody>
                  
                </table>
              </div>
              <form action="/admin/create" method="post">
                @csrf
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
        <div class="form-group col-6">
  <label for="nama">Id Admin</label>
    <input type="text" class="form-control"  name="id_admin"  value="{{ 'Adm-'.$kd }}" readOnly="" required>
  </div>
  <div class="form-group col-6">
  <label for="nama">Username</label>
    <input type="text" class="form-control"  name="username"  required>
    </div>
</div>
    <div class="row">
        <div class="form-group col-6">
  <label for="nama">Password</label>
    <input type="text" class="form-control"  name="password"   required>
  </div>
  <div class="form-group col-6">
  <label for="nama">Level</label>
    <input type="text" class="form-control"  name="level"  required>
    </div>
</div>
    <div class="row">
        <div class="form-group col-6">
  <label for="nama">Nama</label>
    <input type="text" class="form-control"  name="nama"   required>
  </div>
  <div class="form-group col-6">
  <label for="nama">Status</label>
    <input type="text" class="form-control"  name="status"  required>
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

