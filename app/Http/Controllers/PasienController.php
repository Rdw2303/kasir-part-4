<?php

namespace App\Http\Controllers;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(){
        $pasien = Pasien::all();
        return view('tampil',compact(['pasien']));
    }
    public function tambah(){
        $pasien = Pasien::all();
        return view('tambah',compact(['pasien']));
    }
    public function tambahData(Request $request){

        Pasien::create([
            'id_pasien'=>$request->id_pasien,
            'nama_pasien'=>$request->nama_pasien,
            'jk'=>$request->jk,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp
            
        ]);
        return redirect('/pasien');

    }
    public function hapusData($id){
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect('/pasien');
    }
    public function edit($id){
        $pasien = Pasien::findOrFail($id);
        return view('edit',compact(['pasien']));
    }
    public function editData(Request $request,$id){
        $pasien = Pasien::findOrFail($id);
        $pasien->update([
            'id_pasien'=>$request->id_pasien,
            'nama_pasien'=>$request->nama_pasien,
            'jk'=>$request->jk,
            'alamat'=>$request->alamat,
            'no_telp'=>$request->no_telp
            
        ]);
        return redirect('/pasien');
    }
}
