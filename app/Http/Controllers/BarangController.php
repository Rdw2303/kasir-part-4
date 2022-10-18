<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Jenis;
use App\Models\Supplier;
use Illuminate\Http\Request;
use DB;
class BarangController extends Controller
{
    public function index(){
        
        $jenis = Jenis::all();
        $suplier = Supplier::all();
        $barang = Barang::query()
        ->join('jenis', 'barangs.id_jenis' ,'=', 'jenis.id_jenis')
        ->join('suppliers', 'barangs.id_suplier' ,'=', 'suppliers.id_suplier')
        ->select('jenis.jenis_nama','suppliers.nama', 'barangs.*')
        ->get();
        $q = DB::table('barangs')->select(DB::raw('MAX(RIGHT(id_barang,2)) as kode'));
        $kd = "";
        if($q->count()>0){
            foreach($q->get() as $k){
                $tmp = ((int)$k->kode)+1;
                $kd = sprintf("%03s",$tmp);
            
            
        }
    }else{
        $kd = "001";
    }
        //return "Brg-".$kd;
        
        //return $barang;
        return view('Barang/index',['barang'=>$barang,'kd'=>$kd,'jenis'=>$jenis,'suplier'=>$suplier]);
    }
    public function hapus($id){
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('/barang');
    }
    public function create(Request $request){
        Barang::create([
            'id_barang'=>$request->id_barang,
            'barang_kode'=>$request->barang_kode,
            'barang_nama'=>$request->barang_nama,
            'id_jenis'=>$request->id_jenis,
            'id_suplier'=>$request->id_suplier,
            'harga_jual'=>$request->harga_jual,
            'barang_status'=>$request->barang_status        
        ]);
        return redirect('/barang');
    }
    public function edit($id){
        $barang = Barang::find($id);
        $suplier = Supplier::all();
        $jenis = Jenis::all();
        return view ('Barang/edit',['barang'=>$barang,'suplier'=>$suplier,'jenis'=>$jenis]);
    }
    public function update(Request $request,$id){
        $barang = Barang::find($id);
        $barang->update([
            'id_barang'=>$request->id_barang,
            'barang_kode'=>$request->barang_kode,
            'barang_nama'=>$request->barang_nama,
            'id_jenis'=>$request->id_jenis,
            'id_suplier'=>$request->id_suplier,
            'harga_jual'=>$request->harga_jual,
            'barang_status'=>$request->barang_status     
        ]);
        return redirect ('/barang');
    }
}

