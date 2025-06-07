<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biodatacontroller extends Controller
{
    //view tampilan
    //controller mengatur
    //model database dll
    public function index(){
        return view('biodata');
    }
    public function mahasiswa(){
        return view('mahasiswa');
    }
    public function proses(Request $request){
        //dd($request);
        $request->validate([
            'nama' => 'required|max:30',
            'gender' => 'required',
            'email' => 'required|email:dns',
            'phone' => 'required'
        ],[
            'nama.required' => 'Nama harus diisi',
            'gender.required' => 'Jenis Kelamin harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'phone.required' => 'No HP harus diisi'
        ]);
       echo "Nama : $request->nama <br>";
       echo "Jenis Kelamin : $request->gender <br>";
       echo "Email : $request->email <br>";
       echo "No HP : $request->phone<br>";
    }
}
