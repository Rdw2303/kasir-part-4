<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use Illuminate\Http\Request;
use DB;
class SupplierController extends Controller
{
    public function index(){
        $supplier = Supplier::all();
        $q = DB::table('suppliers')->select(DB::raw('MAX(RIGHT(id_suplier,2)) as kode'));
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
        return view ('Supplier/index',['supplier'=>$supplier,'kd'=>$kd]);
    }
    public function hapus($id){
        $supplier = Supplier::find($id);
        $supplier->delete();
        return redirect('/supplier');
    }
    public function create(Request $request){
        Supplier::create([
            'id_suplier'=>$request->id_suplier,
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'phone'=>$request->phone,
            'status'=>$request->status
        ]);
        return redirect('/supplier');
    }
    public function edit($id){
        $supplier = Supplier::find($id);
        return view ('Supplier/edit',['supplier'=>$supplier]);
    }
    public function update ($id,Request $request){
        $supplier = Supplier::find($id);
        $supplier->update([
            'id_suplier'=>$request->id_suplier,
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'phone'=>$request->phone,
            'status'=>$request->status
        ]);
        return redirect ('/supplier');
    }
}
