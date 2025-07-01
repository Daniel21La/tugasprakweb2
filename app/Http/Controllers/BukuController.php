<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['buku'] = Buku::all(); //select * from buku
        return view('buku.index', $data);
    }
    // model =table
    // view = tampilan
    // controller = pengatur
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'isbn' => 'required',
            'judul' => 'required',
            'penerbit' => 'required',
            'penulis' => 'required',
            'tahun' => 'required',
            'cover' => 'required'
        ]);
        $cover = $request->file('cover');
        $covername = $cover->hashName();
        $request->cover->move(public_path('/cover'), $covername);
        $validateData['cover'] = $covername;
        Buku::create($validateData);
        return redirect()->route('buku.index');
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
        $data['buku'] = Buku::find($id); //select * from buku where id = $id
        return view('buku.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'isbn' => 'required',
            'judul' => 'required',
            'penerbit' => 'required',
            'penulis' => 'required',
            'tahun' => 'required'
        ]);
        $buku = Buku::find($id);//update * from buku where id = $id
        $buku->update($validateData);
        return redirect()->route('buku.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = Buku::find($id);
        $buku->delete(); //delete * from buku where id = $id
        unlink(public_path('/cover/'.$buku->cover));
        return redirect()->route('buku.index');
    }
}
