<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
    public function index(){
        $admin = Admin::all();
        $q = DB::table('admins')->select(DB::raw('MAX(RIGHT(id_admin,2)) as kode'));
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
        return view ('Adminn/index',['admin'=>$admin,'kd'=>$kd]);
    }
    public function hapus($id){
        $admin = Admin::find($id);
        $admin->delete();
        return redirect('/admin');
    }
    public function create(Request $request){
        Admin::create([
            'id_admin'=>$request->id_admin,
            'username'=>$request->username,
            'password'=>$request->password,
            'level'=>$request->level,
            'nama'=>$request->nama,
            'status'=>$request->status
        ]);
        return redirect('/admin');
    }
    public function edit($id){
        $admin = Admin::find($id);
        return view ('Adminn/edit',['admin'=>$admin]);
    }
    public function update ($id,Request $request){
        $admin = Admin::find($id);
        $admin->update([
            'id_admin'=>$request->id_admin,
            'username'=>$request->username,
            'password'=>$request->password,
            'level'=>$request->level,
            'nama'=>$request->nama,
            'status'=>$request->status
        ]);
        return redirect ('/admin');
    }
}
