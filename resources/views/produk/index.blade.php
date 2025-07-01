@extends('produk.template')
@section('title', 'Halaman Produk')

@section('konten')
    <h4>Data Produk</h4>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Produk</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Proses</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->stok }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>
                            <form action="{{ route('produk.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELET')
                                <button type="submit" class="btn btn
danger">Delete</button>
                                <a href="{{ route('produk.edit', $data->id) }}" class="btn btn-info">Edit</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('produk.create') }}" class="btn btn
primary">Tambah</a>
    </div>
@endsection
