<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data;

class DataController extends Controller
{
    function beranda() {
        $huruf = "Gege";
        $angka1 = 123;
        $angka2 = 123;

        $json= array(
            'datahuruf'=> $huruf,
            'dataangka1'=> $angka1,
            'dataangka2'=> $angka2,
        );
        
        return view('beranda', compact('json'));
    }

    public function data(){
        $huruf = "Gege";
        $angka1 = 123;
        $angka2 = 123;
        $json= array(
            'data1'=> $huruf,
            'data2'=> $angka1,
            'data3'=> $angka2,
        );
        

        return $json;
    }

    public function get_data(){
        $data = data::all();
        return $data;
    }

    public function create_data(){
        $nama ="gege";
        $semeter="5";
        $nim="23";
        $data = data::create([
            'nama'=>$nama,
            'semeter'=>$semeter,
            'nim'=>$nim,
        ]);

        return "Data Berhasil Dibuat";
    }


    


    
}
