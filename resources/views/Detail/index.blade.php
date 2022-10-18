<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
@extends('master')
@section('nama')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Detail Transaksi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
              <li class="breadcrumb-item active">Detail Transaksi</li>
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
              
               
                
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th scope="col">Id Detail</th>
                  <th scope="col">Id Transaksi</th>
                  <th scope="col">Id Barang</th>
                  <th scope="col">Jenis</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Detail Transaksi</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                @foreach($detail_trx as $d)
                <tr>
                    <td>{{$d->id_detail}}</td>
                    <td>{{$d->id_transaksi}}</td>
                    <td>{{$d->id_barang}}</td>
                    <td>{{$d->jenis_trx}}</td>
                    <td>{{$d->harga_trx}}</td>
                    <td>{{$d->jumlah_trx}}</td>
                    <td>{{$d->detail_status}}</td>
                
                
                  
                  </tr>
                @endforeach
                  </tbody>
                  
                </table>
              </div>
              <form action="/detail/create" method="post">
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
  <label for="nama">Id Detail</label>
    <input type="text" class="form-control"  name="id_detail"  value="{{ 'Dtl-'.$kd }}" readOnly="" required>
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
  <label for="nama">Jenis</label>
    <input type="text" class="form-control"  name="jenis_trx"  required>
    </div>
</div>
<div class="row">
        <div class="form-group col-4">
  <label for="nama">Harga</label>
    <input type="text" class="form-control"  name="harga_trx"   required>
  </div>
  <div class="form-group col-4">
  <label for="nama">Jumlah</label>
    <input type="text" class="form-control"  name="jumlah_trx"   required>
  </div>
  <div class="form-group col-4">
  <label for="nama">Detail Transaksi</label>
    <input type="text" class="form-control"  name="detail_status"   required>
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