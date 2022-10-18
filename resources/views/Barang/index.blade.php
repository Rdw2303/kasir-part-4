<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
@extends('master')

@section('nama')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Master</a></li>
              <li class="breadcrumb-item active">Barang</li>
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
                  <th scope="col">Id Barang</th>
                  <th scope="col">Kode Barang</th>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Id Jenis</th>
                  <th scope="col">Id Supplier</th>
                  <th scope="col">Harga Jual</th>
                  <th scope="col">Status Barang</th>
                  <th scope="col">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($barang as $b)
                <tr>
                    <td>{{$b->id_barang}}</td>
                    <td>{{$b->barang_kode}}</td>
                    <td>{{$b->barang_nama}}</td>
                    <td>{{$b->jenis_nama}}</td>
                    <td>{{$b->nama}}</td>
                    <td>{{$b->harga_jual}}</td>
                    <td>{{$b->barang_status}}</td>
                
                  <td> 
                  <a href="/barang/edit{{$b->id}}" class="btn btn-warning">Edit</a>  
       
                  <a href="/barang/hapus{{$b->id}}" class="btn btn-danger">Delete</a> 

                  </td>
                  </tr>
                  @endforeach
                  </tbody>
                  
                </table>
              </div>
              <form action="/barang/create" method="post">
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
  <label for="nama">Id Barang</label>
    <input type="text" class="form-control"  name="id_barang"  value="{{ 'Brg-'.$kd }}" readOnly="" required>
  </div>
        <div class="form-group col-6">
  <label for="nama">Barang Kode</label>
    <input type="text" class="form-control"  name="barang_kode"  required>
    </div>
        </div>
    <div class="row">
        <div class="form-group col-6">
  <label for="nama">Barang Nama</label>
    <input type="text" class="form-control"  name="barang_nama"   required>
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
    <input type="text" class="form-control"  name="harga_jual"   required>
  </div>
  <div class="form-group col-4">
  <label for="nama">Barang Status</label>
    <input type="text" class="form-control"  name="barang_status"   required>
  </div>
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

