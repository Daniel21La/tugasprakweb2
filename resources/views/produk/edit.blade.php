@extends('produk.template')

@section('title', 'Edit Produk')
@section('konten')
    <div class="card col-md-8">
        <div class="card-header">Edit Produk</div>
        <div class="card-body">
            <form action="{{ route('produk.update', $produk->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="" class="form-label">Nama
                        Produk</label>
                    <input type="text" class="form-control" name="namE" value="{{ $produk->name }}" />
                    @error('nama')
                        <small id="helpId" class="form-text text
danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Harga
                        Produk</label>
                    <input type="text" class="form-control" name="harga" value="{{ $produk->harga }}" />
                    @error('harga')
                        <small id="helpId" class="form-text text
danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Stok</label>
                    <input type="text" class="form-control" name="stok" value="{{ $produk->stok }}" />
                    @error('stok')
                        <small id="helpId" class="form-text text
danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn
success">Simpan</button>
            </form>
        </div>
    </div>
@endsection
