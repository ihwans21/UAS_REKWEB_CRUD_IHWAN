@extends('layouts.app')

@section('title', 'Tambah Pemesanan')

@section('content')
    <h1 class="text-center mb-4">Tambah Pemesanan</h1>
    <form action="{{ route('Hotel.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Nama_Tamu" class="form-label">Nama Tamu</label>
            <input type="text" name="Nama_Tamu" id="Nama_Tamu" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="Tipe_Kamar" class="form-label">Tipe Kamar</label>
            <input type="text" name="Tipe_Kamar" id="Tipe_Kamar" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="Tanggal_Check_in" class="form-label">Tanggal Check in</label>
            <input type="text" name="Tanggal_Check_in" id="Tanggal_Check_in" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="Tanggal_Check_out" class="form-label">Tanggal Check out</label>
            <input type="text" name="Tanggal_Check_out" id="Tanggal_Check_out" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
