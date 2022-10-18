<?php

namespace App\Http\Controllers;
use App\Models\Transaksi;
use App\Models\Admin;
use App\Models\Transaksi_detail;
use Illuminate\Http\Request;
use App\Models\Barang;
use DB;
class TransaksiController extends Controller
{
    public function index(){
        $admin = Admin::all();
        $barang = Barang::all();
        $transaksi = Transaksi::query()
        ->join('admins', 'transaksis.id_admin' ,'=', 'admins.id_admin')
        ->select('admins.level', 'transaksis.*')
        ->get();
        $q = DB::table('transaksis')->select(DB::raw('MAX(RIGHT(id_transaksi,2)) as kode'));
        $kd = "";
        if($q->count()>0){
            foreach($q->get() as $k){
                $tmp = ((int)$k->kode)+1;
                $kd = sprintf("%03s",$tmp);
            
            
        }
    }else{
        $kd = "001";
    }
    $r = DB::table('transaksi_details')->select(DB::raw('MAX(RIGHT(id_detail,2)) as kode'));
        $no = "";
        if($r->count()>0){
            foreach($r->get() as $k){
                $tmp = ((int)$k->kode)+1;
                $no = sprintf("%03s",$tmp);
            
            
        }
    }else{
        $no = "001";
    }
        //return "Trs-".$kd;
        $date = date('Y-m-d');
        //return $transaksi;
        return view('Transaksi/index',['transaksi'=>$transaksi,'kd'=>$kd,'admin'=>$admin,'date'=>$date,'no'=>$no,'barang'=>$barang]);
    }
    public function hapus($id){
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        return redirect('/');
    }
    public function create(Request $request){
        Transaksi::create([
            'id_transaksi'=>$request->id_transaksi,
            'id_admin'=>$request->id_admin,
            'tgl_trx'=>$request->tgl_trx,
            'no_nota'=>$request->no_nota,
            'status_trx'=>$request->status_trx
        ]);
        $simpan = Transaksi_detail::create([
            'id_detail'=>$request->id_detail,
            'id_transaksi'=>$request->id_transaksi,
            'id_barang'=>$request->id_barang,
            'jenis_trx'=>$request->jenis_trx,
            'harga_trx'=>$request->harga_trx,
            'jumlah_trx'=>$request->jumlah_trx,
            'detail_status'=>$request->detail_status
        ]);
        
        return redirect('/');
    }
    public function edit($id){
        $transaksi = Transaksi::find($id);
        $admin = Admin::all();
        //return $admin;
        return view ('/Transaksi/edit',['transaksi'=>$transaksi,'admin'=>$admin]);
    }
    public function update($id,Request $request){
        $transaksi = Transaksi::find($id);
        $transaksi->update([
            'id_transaksi'=>$request->id_transaksi,
            'id_admin'=>$request->id_admin,
            'tgl_trx'=>$request->tgl_trx,
            'no_nota'=>$request->no_nota,
            'status_trx'=>$request->status_trx
        ]);
        return redirect ('/');
    }
}
