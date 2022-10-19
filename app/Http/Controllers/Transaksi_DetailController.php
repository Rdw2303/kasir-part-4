<?php

namespace App\Http\Controllers;
use App\Models\Transaksi_detail;
use App\Models\Transaksi;
use App\Models\Barang;
use DB;
use Illuminate\Http\Request;

class Transaksi_DetailController extends Controller
{
    public function index($id){
        //$detail_trx = Transaksi_detail::all();
        //$transaksi = Transaksi::all();
        //$barang = Barang::all();
        $detail_trx = DB::table('transaksi_details')
        ->where('id_transaksi',$id)
        //->join('transaksis','transaksi_details.id_transaksi','=','transaksis.id_transaksi')
        ->join('barangs','transaksi_details.id_barang','=','barangs.id_barang')
        //->select('transaksis.tgl_trx','barangs.barang_nama','transaksi_details.*')
        ->get();
        $q = DB::table('transaksi_details')->select(DB::raw('MAX(RIGHT(id_detail,2)) as kode'));
        $kd = "";
        if($q->count()>0){
            foreach($q->get() as $k){
                $tmp = ((int)$k->kode)+1;
                $kd = sprintf("%03s",$tmp);
            
            
        }
    }else{
        $kd = "001";
    }
        //dd($detail_trx);
        //return "Dtl-".$kd;
        //return $detail_trx;
        return view('Detail/index',['detail_trx'=>$detail_trx,'kd'=>$kd]);
    }
    public function hapus($id){
        $detail_trx = Transaksi_detail::find($id);
        $detail_trx->delete();
        return redirect('/');
    }
    public function create(Request $request){
        Transaksi_detail::create([
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
        $detail_trx = Transaksi_detail::find($id);
        $transaksi = Transaksi::all();
        $barang = Barang::all();
        return view ('Detail/edit',['detail_trx'=>$detail_trx,'transaksi'=>$transaksi,'barang'=>$barang]);
    }
    public function update(Request $request,$id){
        $detail_trx = Transaksi_detail::find($id);
        $detail_trx->update([
            'id_detail'=>$request->id_detail,
            'id_transaksi'=>$request->id_transaksi,
            'id_barang'=>$request->id_barang,
            'jenis_trx'=>$request->jenis_trx,
            'harga_trx'=>$request->harga_trx,
            'jumlah_trx'=>$request->jumlah_trx,
            'detail_status'=>$request->detail_status
        ]);
        return redirect ('/');
    }
}
