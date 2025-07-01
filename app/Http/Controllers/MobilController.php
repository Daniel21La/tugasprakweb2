<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['mobil'] = Mobil::all(); //select * from mobil
        return view('mobil.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'merk' => 'required',
            'nama_mobil' => 'required',
            'deskripsi' => 'nullable',
            'harga_per_hari' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'nullable|in:tersedia,disewa'
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = $file->hashName(); // membuat nama file random
            $file->move(public_path('/gambar_mobil'), $filename);
            $validatedData['gambar'] = $filename;
        }
        Mobil::create($validatedData);
        return redirect()->route('mobil.index')->with('success', 'Mobil berhasil ditambahkan.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['mobil'] = Mobil::find($id); //select * from mobil where id = $id
        return view('mobil.show', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'merk' => 'required',
            'nama_mobil' => 'required',
            'deskripsi' => 'nullable',
            'harga_per_hari' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'nullable|in:tersedia,disewa'
        ]);
        $mobil = Mobil::findOrFail($id); // cari data mobil berdasarkan id
        // jika ada gambar baru
        if ($request->hasFile('gambar')) {
            // hapus gambar lama
            if ($mobil->gambar && file_exists(public_path('/gambar_mobil/' . $mobil->gambar))) {
                unlink(public_path('/gambar_mobil/' . $mobil->gambar));
            }
            // menyimpan gambar baru
            $file = $request->file('gambar');
            $filename = $file->hashName();
            $file->move(public_path('/gambar_mobil'), $filename);
            $validatedData['gambar'] = $filename;
        }
        // data diupdate
        $mobil->update($validatedData);

        return redirect()->route('mobil.index')->with('success', 'Data mobil berhasil diupdate.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mobil = Mobil::findOrFail($id);
        // menghapus gambar difile jika ada
        if ($mobil->gambar && file_exists(public_path('/gambar_mobil/' . $mobil->gambar))) {
            unlink(public_path('/gambar_mobil/' . $mobil->gambar));
        }
        $mobil->delete(); // delete * from mobils where id = $id
        return redirect()->route('mobil.index')->with('success', 'Data mobil berhasil dihapus.');
    }
}
