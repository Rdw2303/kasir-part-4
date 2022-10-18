<?php

namespace App\Http\Controllers;
use  App\Models\Jenis;
use Illuminate\Http\Request;
use DB;
class JenisController extends Controller
{
    public function index(){
        $jenis = Jenis::all();
        $q = DB::table('jenis')->select(DB::raw('MAX(RIGHT(id_jenis,2)) as kode'));
        $kd = "";
        if($q->count()>0){
            foreach($q->get() as $k){
                $tmp = ((int)$k->kode)+1;
                $kd = sprintf("%03s",$tmp);
            
            
        }
    }else{
        $kd = "001";
    }
        //return "Jns-".$kd;
        return view ('Jenis/index',['jenis'=>$jenis,'kd'=>$kd]);
    }
    public function hapus($id){
        $jenis = Jenis::find($id);
        $jenis->delete();
        return redirect('/jenis');
    }
    public function create(Request $request){
        Jenis::create([
            'id_jenis'=>$request->id_jenis,
            'jenis_nama'=>$request->jenis_nama,
            'jenis_status'=>$request->jenis_status
        ]);
        return redirect('/jenis');
    }
    public function edit($id){
        $jenis = Jenis::find($id);
        $q = DB::table('jenis')->select(DB::raw('MAX(RIGHT(id_jenis,2)) as kode'));
        $kd = "";
        if($q->count()>0){
            foreach($q->get() as $k){
                $tmp = ((int)$k->kode)+1;
                $kd = sprintf("%03s",$tmp);
            
            
        }
    }else{
        $kd = "001";
    }
        return view('Jenis/edit',['jenis'=>$jenis,'kd'=>$kd]);
    }
    public function update($id,Request $request){
        $jenis = Jenis::find($id);
        $jenis->update([
            'id_jenis'=>$request->id_jenis,
            'jenis_nama'=>$request->jenis_nama,
            'jenis_status'=>$request->jenis_status
        ]);
        
        return redirect('/jenis');
    }
}
