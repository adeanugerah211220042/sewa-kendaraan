<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraans'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_pol' => 'required|unique:kendaraans',
            'no_mesin' => 'required|unique:kendaraans',
            'jenis_mobil' => 'required',
            'nama_mobil' => 'required',
            'merk' => 'required',
            'kapasitas' => 'required',
            'tarif' => 'required|integer',
        ]);

        Kendaraan::create($request->all());

        return redirect()->route('kendaraan.index')
            ->with('success', 'Kendaraan berhasil ditambahkan.');
    }

    public function show($no_pol)
    {
        $kendaraan = Kendaraan::findOrFail($no_pol);
        return view('kendaraan.show', compact('kendaraan'));
    }

    public function edit($no_pol)
    {
        $kendaraan = Kendaraan::findOrFail($no_pol);
        return view('kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, $no_pol)
    {
        $request->validate([
            'no_mesin' => 'required',
            'jenis_mobil' => 'required',
            'nama_mobil' => 'required',
            'merk' => 'required',
            'kapasitas' => 'required',
            'tarif' => 'required|integer',
        ]);

        $kendaraan = Kendaraan::findOrFail($no_pol);
        $kendaraan->update($request->all());

        return redirect()->route('kendaraan.index')
            ->with('success', 'Kendaraan berhasil diperbarui.');
    }

    public function destroy($no_pol)
    {
        $kendaraan = Kendaraan::findOrFail($no_pol);
        $kendaraan->delete();

        return redirect()->route('kendaraan.index')
            ->with('success', 'Kendaraan berhasil dihapus.');
    }
}
