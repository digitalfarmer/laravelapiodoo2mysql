<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        if(count($siswa)>0){
            $res['message']="Success!";
            $res['data']=$siswa;
            return  response($res);
        }else{
            $res['message']="Empty!";
            return  response($res);
        }
    }

    public function getid($id)
    {
        # code...
        $data = Siswa::where('id',$id)->get();
        if (count($data)>0) {
            # code...
            $res['message']="Success!";
            $res['data']=$data;
            return response($res);
        }else{
            $res['message']="Not Found!";
            return  response($res);
        }
    }

    public function create(request $request)
    {
        # code...
        $siswa = new Siswa();
        $siswa ->nama = $request->nama;
        $siswa ->alamat = $request->alamat;
        $siswa->save();

        return "data berhasil di save";
    }

    public function update(request $request, $id)
    {
        # code...
        $nama = $request->nama;
        $alamat = $request->alamat;

        $siswa = Siswa::find($id);
        $siswa->nama= $nama;
        $siswa->alamat=$alamat;
        $siswa->save();

        return "Data Berhasil di update";
    }

    public function delete($id)
    {
        # code...
        $siswa = Siswa::find($id);
        $siswa->delete();

        return "Data Berhasil di hapus";
    }
}
