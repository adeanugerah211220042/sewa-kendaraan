<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use App\Models\Kendaraan;
use App\Models\Penyewa;
use App\Models\Kwitansi;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    public function index()
    {
        $sewas = Sewa::all();
        return view('sewa.index', compact('sewas'));
    }

    public function create()
    {
        $kendaraans = Kendaraan::all();
        $penyewas = Penyewa::all();
        $kwitansis = Kwitansi::all();
        return view('sewa.create', compact('kendaraans', 'penyewas', 'kwitansis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_pol' => 'required|exists:kendaraans,no_pol',
            'tgl_sewa' => 'required|date',
            'tgl_selesai' => 'required|date|after_or_equal:tgl_sewa',
            'tlp_tujuan' => 'required|string|max:15',
            'alamat_tujuan' => 'required|string',
            'biaya_sewa' => 'required|integer',
            'kota' => 'string|max:50',
            'id_penyewa' => 'required|exists:penyewas,id',
            'jln_penumpang' => 'required|integer',
            'id_kwitansi' => 'required|exists:kwitansis,id'
        ]);

        Sewa::create($request->all());

        return redirect()->route('sewa.index')
            ->with('success', 'Sewa berhasil ditambahkan.');
    }

    public function show($id)
    {
        $sewa = Sewa::findOrFail($id);
        return view('sewa.show', compact('sewa'));
    }

    public function edit($id)
    {
        $sewa = Sewa::findOrFail($id);
        $kendaraans = Kendaraan::all();
        $penyewas = Penyewa::all();
        $kwitansis = Kwitansi::all();
        return view('sewa.edit', compact('sewa', 'kendaraans', 'penyewas', 'kwitansis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_pol' => 'required|exists:kendaraans,no_pol',
            'tgl_sewa' => 'required|date',
            'tgl_selesai' => 'required|date|after_or_equal:tgl_sewa',
            'tlp_tujuan' => 'required|string|max:15',
            'alamat_tujuan' => 'required|string',
            'biaya_sewa' => 'required|integer',
            'kota' => 'string|max:50',
            'id_penyewa' => 'required|exists:penyewas,id',
            'jln_penumpang' => 'required|integer',
            'id_kwitansi' => 'required|exists:kwitansis,id'
        ]);

        $sewa = Sewa::findOrFail($id);
        $sewa->update($request->all());

        return redirect()->route('sewa.index')
            ->with('success', 'Sewa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $sewa = Sewa::findOrFail($id);
        $sewa->delete();

        return redirect()->route('sewa.index')
            ->with('success', 'Sewa berhasil dihapus.');
    }
}
