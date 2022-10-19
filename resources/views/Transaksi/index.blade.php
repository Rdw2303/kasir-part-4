<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
@extends('master')
@section('nama')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Transaksi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item active">Transaksi</li>
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
                  <th scope="col">Id Transaksi</th>
                  <th scope="col">Id Admin</th>
                  <th scope="col">Tanggal Transaksi</th>
                  <th scope="col">No Nota</th>
                  <th scope="col">Status Transaksi</th>
                  <th scope="col">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($transaksi as $t)
                <tr>
                    <td>{{$t->id_transaksi}}</td>
                    <td>{{$t->level}}</td>
                    <td>{{$t->tgl_trx}}</td>
                    <td>{{$t->no_nota}}</td>
                    <td>{{$t->status_trx}}</td>
        
    
                
                  <td>
                  <a href="/transaksi_detail/detail{{$t->id_transaksi}}" class="btn btn-success">Detail</a> 

                  <a href="/transaksi/edit{{$t->id}}" class="btn btn-warning">Edit</a>  
       
                  <a href="/transaksi/hapus{{$t->id}}" class="btn btn-danger">Delete</a> 

                  </td>
                  </tr>
                  @endforeach 
                  </tbody>
                  
                </table>
              </div>
              <form action="/transaksi/create" method="post">
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
  <label for="nama">Id  Admin</label>
  <select name="id_admin"  class="form-control ">
      <option >Pilih Level</option>
      @foreach($admin as $item)
      <option value="{{$item->id_admin}}">{{$item->level}}</option>
      @endforeach
</select>
    </div>
    <div class="form-group col-6">
    <label for="nama">Tanggal Transaksi</label>
    <input type="date" class="form-control"  name="tgl_trx"  required>
    </div>
        
        </div>
        <div class="row">
        <div class="form-group col-6">
    <label for="nama">No Nota</label>
    <input type="text" class="form-control"  name="no_nota"  required>
    </div>
    <div class="form-group col-6">
    <label for="nama">Status Transaksi</label>
    <input type="text" class="form-control"  name="status_trx"  required>
    </div>
        </div>
        </div>
        <div class="container">
          <div class="row">
          
        <div class="form-group col-6">
    <label for="nama">Id Barang</label>
    <select name="id_barang"  class="form-control ">
      <option >Pilih Nama Barang</option>
      @foreach($barang as $item)
      <option value="{{$item->id_barang}}">{{$item->barang_nama}}</option>
      @endforeach
</select>
    </div>
    <div class="form-group col-6">
    <label for="nama">Transaksi Jenis</label>
    <input type="text" class="form-control"  name="jenis_trx"  required>
    </div>
    </div>
    <div class="row">
    <div class="form-group col-6">
    <label for="nama">Transaksi Harga</label>
    <input type="text" class="form-control"  name="harga_trx"  required>
    </div>
    <div class="form-group col-6">
    <label for="nama">Transaksi Jumlah</label>
    <input type="text" class="form-control"  name="jumlah_trx"  required>
    </div>
</div>
    <div class="form-group">
    <label for="nama">Transaksi Detail Transaksi</label>
    <input type="text" class="form-control"  name="detail_status"  required>
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

