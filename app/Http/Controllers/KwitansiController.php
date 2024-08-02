<?php

namespace App\Http\Controllers;

use App\Models\Kwitansi;
use Illuminate\Http\Request;

class KwitansiController extends Controller
{
    public function index()
    {
        $kwitansis = Kwitansi::all();
        return view('kwitansi.index', compact('kwitansis'));
    }

    public function create()
    {
        return view('kwitansi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tgl_kwitansi' => 'required|date',
        ]);

        Kwitansi::create($request->all());

        return redirect()->route('kwitansi.index')
            ->with('success', 'Kwitansi berhasil ditambahkan.');
    }

    public function show($id)
    {
        $kwitansi = Kwitansi::findOrFail($id);
        return view('kwitansi.show', compact('kwitansi'));
    }

    public function edit($id)
    {
        $kwitansi = Kwitansi::findOrFail($id);
        return view('kwitansi.edit', compact('kwitansi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tgl_kwitansi' => 'required|date',
        ]);

        $kwitansi = Kwitansi::findOrFail($id);
        $kwitansi->update($request->all());

        return redirect()->route('kwitansi.index')
            ->with('success', 'Kwitansi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kwitansi = Kwitansi::findOrFail($id);
        $kwitansi->delete();

        return redirect()->route('kwitansi.index')
            ->with('success', 'Kwitansi berhasil dihapus.');
    }
}

