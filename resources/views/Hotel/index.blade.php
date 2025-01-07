@extends('layouts.app')

@section('title', 'Data hotel')

@section('content')
    <h1 class="text-center mb-4">Data hotel</h1>
        <a href="{{ route('Hotel.create') }}" class="btn btn-primary mb-3">Tambah Pesanan</a>
        <a href="{{ route('Hotel.export.pdf') }}" class="btn btn-secondary mb-3">Export PDF</a>
        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama Tamu</th>
                <th>Tipe Kamar</th>
                <th>Tanggal Check in</th>
                <th>Tanggal Check out</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Hotel as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->Nama_Tamu }}</td>
                    <td>{{ $item->Tipe_Kamar }}</td>
                    <td>{{ $item->Tanggal_Check_in}}</td>
                    <td>{{ $item->Tanggal_Check_out }}</td>
                    <td>
                        <a href="{{ route('Hotel.edit', $item->id_Pemesanan) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('Hotel.destroy', $item->id_Pemesanan) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection