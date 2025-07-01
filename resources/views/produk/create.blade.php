@extends('produk.template')

@section('title', 'Tambah Produk')
@section('konten')
    <div class="card col-md-8">
        <div class="card-header">Tambah Produk</div>
        <div class="card-body">
            <form action="{{ route('produk.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Nama
                        Produk</label>
                    <input type="text" class="form-control" name="nama" value="{{ @old('nama') }}" />
                    @error('nama')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Harga
                        Produk</label>
                    <input type="text" class="form-control" name="harga" value="{{ @old('harga') }}" />
                    @error('harga')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Stok</label>
                    <input type="text" class="form-control" name="stok" value="{{ @old('stok') }}" />
                    @error('stok')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn
success">Simpan</button>
            </form>
        </div>
    </div>


@endsection
