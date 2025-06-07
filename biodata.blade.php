@extends('layout.template')
@section('judul', 'Halaman Biodata')
@section('isi')
    <h2>Halaman Formulir Biodata</h2>
    <form action="/biodata" method="post">
        @csrf
    Nama : <br>
    <input type="text" name="nama" id="nama" value="{{ old('nama') }}">
    @error ('nama')
    <br>
    <label style="color: red"> {{ $message }} </label> 
    @enderror
    <br>
    <br>
    Jenis Kelamin : <br>
    <select name="gender" id="gender">
        <option value="">-----Pilih-----</option>
        <option value="laki-laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
    </select> 
    @error ('gender')
    <br>
    <label style="color: red">{{ $message }} </label> 
    @enderror
    <br>
    <br>
    Email : <br>
    <input type="text" name="email" id="email" value="{{ old('email') }}">
    @error ('email')
    <br>
    <label style="color: red">{{ $message }} </label> 
    @enderror
    <br>
    <br>
    Nomor Telepon : <br>
    <input type="text" name="phone" id="phone" value="{{ old('phone') }}">
    @error ('phone')
    <br>
    <label style="color: red"> {{ $message }} </label> 
    @enderror
    <br>
    <br>
    <button type="submit">Submit</button>
    </form>
@endsection
