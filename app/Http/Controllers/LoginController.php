<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }
    public function autentikasi(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if(Auth  ::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('produk.index');
        }
    }
    public function registrasi(){
        return view('login.registrasi');
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|uniqe/users',
            'password' => 'required'
        ]);
        User::create($validateData);
        return redirect()->route('login');
    }
    public function keluar(){
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('produk.index');
    }
}
