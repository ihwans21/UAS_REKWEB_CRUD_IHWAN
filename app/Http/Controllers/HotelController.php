<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class HotelController extends Controller
{
    public function index()
    {
        $Hotel = Hotel::all();
        return view('Hotel.index', compact('Hotel'));
    }

    public function create()
    {
        return view('Hotel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama_Tamu' => 'required',
            'Tipe_Kamar' => 'required',
            'Tanggal_Check_in' => 'required',
            'Tanggal_Check_out' => 'required',
        ]);

        hotel::create($request->all());
        return redirect()->route('Hotel.index')->with('success', 'Data hotel berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $Hotel = Hotel::findOrFail($id); 
        return view('Hotel.edit', compact('Hotel'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama_Tamu' => 'required',
            'Tipe_Kamar' => 'required',
            'Tanggal_Check_in' => 'required',
            'Tanggal_Check_out' => 'required',
        ]);

        $Hotel = Hotel::findOrFail($id);
        $Hotel->update($request->all());
        return redirect()->route('Hotel.index')->with('success', 'Data hotel berhasil diupdate.');
    }

    public function destroy($id)
    {
        $Hotel = Hotel::findOrFail($id);
        $Hotel->delete();
        return redirect()->route('Hotel.index')->with('success', 'Data hotel berhasil dihapus.');
    }

    public function exportPdf()
    {
        $Hotel = Hotel::all();
        $pdf = Pdf::loadView('Hotel.pdf', compact('Hotel'));
        return $pdf->download('laporan_hotel.pdf');
    }
}